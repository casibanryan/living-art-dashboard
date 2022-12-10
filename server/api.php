<?php

$con = new mysqli('localhost', 'root', '', 'living_art_db');
session_start();
$method = $_POST['method'];

if (function_exists($method)) {
    call_user_func($method);
} else {
    echo 'function not found';
}

function register()
{
    global $con;
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $type = $_POST['type'];

    if (unique_email($con, $email) == 'valid') {
        $query = $con->prepare('INSERT INTO users(first_name, last_name, email, password, created_at) VALUES(?, ?, ?, ?, NOW())');
        $query->bind_param('ssss', $first_name, $last_name, $email, $password);
        if ($query->execute() && $type == 'register') {
            echo 1;
        } else if ($type == 'add_user') {
            echo 2;
        } else {
            echo 0;
        }
    } else {
        echo 3;
    }
}

function login()
{
    global $con;
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['counter_lock'] = empty($_SESSION['counter_lock']) ? 0 : $_SESSION['counter_lock'];

    $query = $con->prepare('SELECT * FROM users WHERE email = ? LIMIT 1');
    $query->bind_param('s', $email);
    $query->execute();
    $data = $query->get_result()->fetch_assoc();
    if (password_verify($password, $data['password']) && $data['status'] == 1 && $data['is_deleted'] != 1 && $data['counterlock'] != 1) {
        $_SESSION['user_id'] = $data['id'];
        $_SESSION['role'] = $data['role'];
        $_SESSION['email'] = $data['email'];
        $_SESSION['remember_me'] = false;
        if (isset($_POST['remember_me'])) {
            $_SESSION['remember_me'] = true;
            $_SESSION['password'] = $password;
        }
        echo 1; // admin dashboard
    } else if ($data['status'] == 0) {
        echo 2;  // account is currently de-activated
    } else if ($data['counterlock'] == 1) {
        echo 'locked_account';
    } else {
        $_SESSION['counter_lock'] += 1;
        if ($_SESSION['counter_lock'] >= 3) {
            $lock_query = $con->prepare('UPDATE users SET counterlock = 1, updated_at = NOW() WHERE email = ?');
            $lock_query->bind_param('s', $email);
            if ($lock_query->execute()) {
                echo 3; // locked user
            }
        } else {
            echo 0; // wrong password
        }
    }
}

function logout()
{
    foreach ($_SESSION as $key => $val) {
        if ($key !== 'email' && $key !== 'remember_me' && $key !== 'password') {
            unset($_SESSION[$key]);
        }
    }
}

function unique_email($con, $email)
{
    $query = $con->prepare('SELECT * from users WHERE email = ? LIMIT 1');
    $query->bind_param('s', $email);
    $query->execute();
    $result = $query->get_result()->num_rows;
    if ($result == 0) {
        return 'valid';
    } else {
        return 'invalid';
    }
}

function fetch_users()
{
    global $con;
    $query = $con->prepare('SELECT * FROM users ORDER BY created_at DESC');
    $query->execute();
    $result = $query->get_result();
    $data = array();
    while ($res = $result->fetch_assoc()) {
        $data[] = $res;
    }
    echo json_encode($data);
}

function fetch_locked_users()
{
    global $con;
    $query = $con->prepare('SELECT * FROM users WHERE counterlock = 1 ORDER BY created_at DESC LIMIT 8');
    $query->execute();
    $result = $query->get_result();
    $data = array();
    while ($res = $result->fetch_assoc()) {
        $data[] = $res;
    }
    echo json_encode($data);
}


function fetch_activities()
{
    global $con;
    $query = $con->prepare('SELECT activities.*, users.first_name, users.profile FROM activities LEFT JOIN users on users.id = activities.user_id ORDER BY created_at DESC LIMIT 5');
    $query->execute();
    $result = $query->get_result();
    $data = array();
    while ($res = $result->fetch_assoc()) {
        $data[] = $res;
    }
    echo json_encode($data);
}

function change_status()
{
    global $con;
    $status = $_POST['status'];
    $user_id = $_POST['user_id'];
    $query = $con->prepare('UPDATE users SET status = ?, updated_at = NOW() WHERE id = ?');
    $query->bind_param('ii', $status, $user_id);
    if ($query->execute()) {
        $content = 'Changed user status';
        add_activities($con, $user_id, $content, 1);
        echo 1;
    } else {
        echo 0;
    }
}
function delete_user()
{
    global $con;
    $user_id = $_POST['user_id'];
    $query = $con->prepare('UPDATE users SET is_deleted = 1, updated_at = NOW() WHERE id = ?');
    $query->bind_param('i', $user_id);
    if ($query->execute()) {
        $content = 'Delete user';
        add_activities($con, $user_id, $content, 1);
        echo 1;
    } else {
        echo 0;
    }
}

function add_activities($con, $user_id, $content, $role)
{
    $query = $con->prepare('INSERT INTO activities(user_id, content, role, created_at) VALUES(?, ?, ?, NOW())');
    $query->bind_param('isi', $user_id, $content, $role);
    if ($query->execute()) {
        return true;
    } else {
        return false;
    }
}

function update_profile()
{
    global $con;
    $user_id = $_POST['user_id'];

    if (isset($_POST["user_profile"])) {

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        // update full name only
        if (empty($_FILES["profile"]["tmp_name"])) {
            $query = $con->prepare('UPDATE users SET first_name = ?, last_name = ?, updated_at = NOW() WHERE id = ?');
            $query->bind_param('ssi', $first_name, $last_name, $user_id);
            $query->execute();
            echo 1;
            die();
        }

        $target_dir = "../images/profile/";
        $target_file = $target_dir . basename($_FILES["profile"]["name"]);
        $uploadOk = 1;
        $error_msg = '';
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["profile"]["tmp_name"]);

        if ($check !== false) {
            $uploadOk = 1;
        } else {
            $error_msg .= "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size
        if ($_FILES["profile"]["size"] > 200000) {
            $error_msg .= "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if (
            $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif"
        ) {
            $error_msg .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo $error_msg;
            die();
            // if everything is ok, try to upload file
        } else {
            $file_name = $first_name . '-' . $last_name . "-" . rand(1, 1000) . '.' . $imageFileType;
            $path = $target_dir . $file_name;
            $query = $con->prepare('UPDATE users SET first_name = ?, last_name = ?, profile = ?, updated_at = NOW() WHERE id = ?');
            $query->bind_param('sssi', $first_name, $last_name, $file_name, $user_id);

            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $path) && $query->execute()) {
                echo 1;
            } else {
                echo 'upload error';
            }
        }
    } else {
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $query = $con->prepare('UPDATE users SET email = ?, password = ?, updated_at = NOW() WHERE id = ?');
        $query->bind_param('ssi', $email, $password, $user_id);
        $query->execute();
        echo 1;
    }
}


function unlock_user()
{
    global $con;
    $user_id = $_POST['user_id'];

    $query = $con->prepare('UPDATE users SET counterlock = 0, updated_at = NOW() WHERE id = ?');
    $query->bind_param('i', $user_id);
    if ($query->execute()) {
        $content = 'Unlocked user';
        add_activities($con, $user_id, $content, 1);
        echo 1;
    } else {
        echo 0;
    }
}

function update_user()
{
    global $con;
    $user_id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $role = $_POST['role'];
    $query = $con->prepare('UPDATE users SET first_name = ?, last_name = ?, email = ?, role = ?, updated_at = NOW() WHERE id = ?');
    $query->bind_param('sssii', $first_name, $last_name, $email, $role, $user_id);
    if ($query->execute()) {
        $content = 'Update user';
        add_activities($con, $user_id, $content, 1);
        echo 1;
    } else {
        echo 0;
    }
}
