<?php
require("../require/dashboard/page.php");
$cydb = mysqli_connect($getsettings["cydb_host"]. ':'. $getsettings["cydb_port"], $getsettings["cydb_user"], $getsettings["cydb_pass"], $getsettings["cydb_name"]);
$cydbw = $cydb->query("SELECT * FROM `websiteFunctions_websites` WHERE adminEmail='". $userdb['email'] ."'")->fetch_array();
$cydbpln = $cydb->query("SELECT * FROM `packages_package` WHERE packageName='". $userdb['plan'] ."'")->fetch_array();


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
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Domains</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $cydbpln['allowedDomains'] ?></span>
                            <br /><br />
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
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">FTP Accounts</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $cydbpln['ftpAccounts'] ?></span>
                            <br /><br />
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-user"></i>
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
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Databases</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $cydbpln['dataBases'] ?></span>

                            <br /><br />
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
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Emails accounts</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $cydbpln['emailAccounts'] ?></span>
                            <br /><br />
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-envelope"></i>
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
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white"><?= $getsettings['currencyname'] ?></h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $userdb['coins'] ?> </span>
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
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Disk Space</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $cydbpln['diskSpace'] ?></span>

                            <br /><br />
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
                            <h5 class="card-title text-uppercase text-muted mb-0 text-white">Bandwidth</h5>
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $cydbpln['bandwidth'] ?></span>

                            <br /><br />
                        </div>
                        <div class="col-auto">
                            <div class="icon icon-shape bg-white text-dark rounded-circle shadow">
                                <i class="fa fa-fighter-jet"></i>
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
                            <span class="h2 font-weight-bold mb-0 text-white"><?= $userdb['plan'] ?></span>
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
                    <h3 class="text-white mb-0">Your websites</h3>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center table-dark table-flush">
                        <tbody class="list">
                            <?php
                            $isserver = "1";
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
                                    <th scope="col">Website domain</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">PhP version</th>
                                    <th scope="col">SSL Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            
                            <tr>
                                <th scope="row">
                                    <div class="media align-items-center">
                                        <div class="media-body">
                                            <span class="name mb-0 text-sm">
                                                <?= $cydbw['domain'] ?>
                                            </span>
                                        </div>
                                    </div>
                                </th>
                                <td>
                                    <?php 
                                    if ($cydbw['state'] == "1")
                                    {
                                        echo "Online";
                                    }
                                    else
                                    {
                                        echo "Suspended";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?= $cydbw['phpSelection'] ?>
                                </td>
                                <td>
                                    <?php
                                    if ($cydbw['ssl'] == "1")
                                    {
                                        echo "SSL Vaild";
                                    }
                                    else
                                    {
                                        echo "No SSL";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?php 
                                    if ($cydbw['ssl'] == "1")
                                    {
                                        $openwb = "https://";
                                    }
                                    else
                                    {
                                        $openwb = "http://";
                                    }
                                    echo $openwb . $cydbw['domain'];
                                    ?>" class="btn btn-primary btn-sm" data-trigger="hover" data-container="body" data-toggle="popover" data-color="default" data-placement="left" data-content="Open in the game panel">Open Website</a>
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
                    &copy; 2022 <a href="https://ignition-development.xyz/" class="font-weight-bold ml-1"
                        target="_blank">Ignition-Development</a> - Theme by <a href="https://creativetim.com"
                        target="_blank">Creative Tim</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="<?= $getsettings["websitelink"] ?>" class="nav-link" target="_blank"> Website</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $getsettings["statuspage"] ?>" class="nav-link" target="_blank">Uptime / Status</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $getsettings["webpanel"] ?>" class="nav-link" target="_blank">WebPanel</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= $getsettings["backround"] ?>" class="nav-link" target="_blank">Terms of service</a>
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