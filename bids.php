<?php include 'shared/head.php'; ?>
<div id="main-wrapper" class="app">

    <?php
    include 'shared/navbar.php';
    include 'shared/sidebar.php';
    ?>

    <div class="content-body">
        <div class="container">
            <div class="page-title">
                <div class="row align-items-center justify-content-between">
                    <div class="col-6">
                        <div class="page-title-content">
                            <h3>Bids</h3>
                            <p class="mb-2">Welcome to Bids page</p>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="breadcrumbs"><a href="#">Home </a><span><i class="ri-arrow-right-s-line"></i></span><a href="#">Bids</a></div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-primary"><span><i class="ri-file-copy-2-line"></i></span></div>
                        <div class="widget-content">
                            <h3>24K</h3>
                            <p>Artworks</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-success"><span><i class="ri-file-list-3-line"></i></span></div>
                        <div class="widget-content">
                            <h3>82K</h3>
                            <p>Auction</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-warning"><span><i class="ri-file-paper-line"></i></span></div>
                        <div class="widget-content">
                            <h3>200</h3>
                            <p>Creators</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="stat-widget d-flex align-items-center">
                        <div class="widget-icon me-3 bg-danger"><span><i class="ri-file-paper-2-line"></i></span></div>
                        <div class="widget-content">
                            <h3>89</h3>
                            <p>Canceled</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-row">
                            <h4 class="card-title">Active Bids </h4>
                            <a class="btn btn-primary" href="#">Place a Bid</a>
                        </div>
                        <div class="card-body p-0 bs-0 bg-transparent">
                            <div class="bid-table">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                                </th>
                                                <th>Item List</th>
                                                <th>Open Price</th>
                                                <th>Your Offer</th>
                                                <th>Recent Offer</th>
                                                <th>Time Left</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check"><input class="form-check-input" type="checkbox" id="flexCheckDefault" value=""></div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center"><img src="images/items/15.jpg" alt="" width="60" class="me-3 rounded">
                                                        <div class="flex-grow-1">
                                                            <h6 class="mb-0">Cutes Cube Cool</h6>
                                                            <p class="mb-0">John Abraham</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>0.0025 ETH</td>
                                                <td> 0.0025 ETH</td>
                                                <td><img src="images/avatar/1.jpg" alt="" width="40" class="me-2 rounded-circle">0.0025 ETH</td>
                                                <td>2 Hours 1 min 30s</td>
                                                <td><span><i class="ri-close-line me-3"></i></span></td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

<?= include 'shared/scripts.php'; ?>

</body>

</html>