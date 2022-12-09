<?php
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../auth/login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location:../auth/login.php");
}
require("../require/dashboard/page.php");

?>
<div class="header pb-6 d-flex align-items-center"
    style="min-height: 500px; background-image: url(<?= $getsettings["backround"] ?>); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-2 text-white">Hello <?= $userdb['username'] ?>
                </h1>
                <p class="text-white mt-0 mb-5">Welcome to MythicalNodes! Get your server below!</p>
                <a href="create" class="btn btn-neutral">Create a new server</a>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Processor limit</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">100%</span>
                            CPU
                            <div class="progress" style="height: 5px; background-color: rgba(255, 255, 255, .2);">
                                <div class="progress-bar bg-white" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-microchip"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">RAM usage</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">2048 MB</span>

                            <div class="progress" style="height: 5px; background-color: rgba(255, 255, 255, .2);">
                                <div class="progress-bar bg-white" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-memory"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Disk usage</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">1024 MB</span>

                            <div class="progress" style="height: 5px; background-color: rgba(255, 255, 255, .2);">
                                <div class="progress-bar bg-white" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-hdd"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Server slots</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">2</span>

                            <div class="progress" style="height: 5px; background-color: rgba(255, 255, 255, .2);">
                                <div class="progress-bar bg-white" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-server"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!---
        CARD 2
        -->
    <div class="row">
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Coins</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">12</span>
                            <br /><br />
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Additional ports</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">12</span>

                            <div class="progress" style="height: 5px; background-color: rgba(255, 255, 255, .2);">
                                <div class="progress-bar bg-white" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fas fa-network-wired"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Databases limit</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">12</span>

                            <div class="progress" style="height: 5px; background-color: rgba(255, 255, 255, .2);">
                                <div class="progress-bar bg-white" role="progressbar" aria-valuenow="100"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 100%;"></div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-database"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card bg-gradient-warning border-0">
                <!-- Card body -->
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Current plan</h5>
                            <span class="h2 font-weight-bold mb-0 text-white">Free</span>
                            <br /><br />
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-dollar-sign"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card bg-default shadow">
                <div class="card-header bg-transparent border-0">
                    <h3 class="text-white mb-0">Your servers</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <tbody class="list">
                            <?php
                            $isserver = "0";
                            if ($isserver == "0") {
                                // No servers
                            ?>
                            <div style="text-align: center;">
                                <img src="../assets/dash/img/empty.svg" height="150" /><br />
                                <h2 style="color: white;">No servers yet. Why not creating one?</h2>
                                <a href="create" class="btn btn-neutral">Create a new server</a><br /><br />
                            </div>
                            <?php
                            } else {
                                ?>
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Server name</th>
                                    <th scope="col">Node</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Server type</th>
                                    <th scope="col">CPU</th>
                                    <th scope="col">RAM</th>
                                    <th scope="col">Disk</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">
                                                MythicalNodes
                                            </span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <img src="data:image/jpeg;base64,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" width="20" />
                                    Germany 
                                </td>
                                <td>
                                    Dead
                                </td>
                                <td>
                                    <img src="data:image/jpeg;base64,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" height="20" />
                                    MythicalNodes
                                </td>
                                <td>
                                    100%
                                </td>
                                <td>
                                    1024MB
                                </td>
                                <td>
                                    1024MB
                                </td>
                                <td>
                                    <a href="goggle.com" class="btn btn-primary btn-sm" data-trigger="hover" data-container="body" data-toggle="popover" data-color="default" data-placement="left" data-content="Open in the game panel">Open Website</a>
                                    <a href="/server/manage?id=1" class="btn btn-primary btn-sm">Edit</a>
                                    <a href="/server/delete?server=1"><button type="button" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button></a>
                                </td>
                            </tr>
                            <?php
                            }
                                ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2022 <a href="https://github.com/ShadowsDash" class="font-weight-bold ml-1"
                        target="_blank">Shadow's Dash - X_Shadow_#5962</a> - Theme by <a href="https://creativetim.com"
                        target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="" class="nav-link" target="_blank"> Website</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" target="_blank">Uptime / Status</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" target="_blank">Privacy policy</a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link" target="_blank">Terms of service</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
</div>

<!-- Core -->
<script>
    $("#gamepanelopen").popover({ trigger: "hover" });
</script>
<script src="../assets/dash/vendor/jquery/dist/jquery.min.js"></script>
<script src="../assets/dash/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="../assets/dash/vendor/js-cookie/js.cookie.js"></script>
<script src="../assets/dash/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/dash/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- Argon JS -->
<script src="../assets/dash/js/argon.js?v=1.2.0"></script>
</body>

</html>