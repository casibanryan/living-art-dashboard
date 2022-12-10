 <div class="sidebar">
     <div class="brand-logo"><a class="full-logo" href="index.php"><img src="images/logoi.png" alt="" width="30"></a></div>
     <div class="menu">
         <ul>
             <li>
                 <a href="index.php">
                     <span><i class="ri-layout-grid-fill"></i></span>
                     <span class="nav-text">Dashboard</span>
                 </a>
             </li>
             <li class="" v-if="myInfo.role == 0">
                 <a href="bids.php">
                     <span><i class="ri-briefcase-line"></i></span>
                     <span class="nav-text">Bids</span></a>
             </li>

             <li class="" v-if="myInfo.role == 0">
                 <a href="profile.php">
                     <span><i class="ri-account-box-line"></i></span>
                     <span class="nav-text">Profile</span></a>
             </li>
             <li class="">
                 <a href="settings-profile.php">
                     <span><i class="ri-settings-3-line"></i></span>
                     <span class="nav-text">Settings</span></a>
             </li>
             <li class="logout">
                 <a @click="logout" href="signin.php">
                     <span><i class="ri-logout-circle-line"></i></span>
                     <span class="nav-text">Signout</span>
                 </a>
             </li>
         </ul>
     </div>
 </div>