<?php 
session_start();
if (!isset($_SESSION['email'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../auth/login.php');
    die;
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location:../auth/login.php");
    die;
}

include('../require/config.php');
include_once("../require/sql.php");
$getsettings = $dbconn->query("SELECT * FROM settings")->fetch_array();
$usremail = $_SESSION['email']; 
$userdb = $dbconn->query("SELECT * FROM users WHERE email='". $_SESSION['email'] ."'")->fetch_array();
?>
<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com
=========================================================
-->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Ignition-Development - <?= $getsettings['appname'] ?>">
  <title><?= $getsettings['appname'] ?></title>
  <link rel="icon" href="<?= $getsettings['applogo'] ?>" type="image/png">
  <meta property="og:image" content="<?= $getsettings['applogo'] ?>">
  <meta property="og:title" content="<?= $getsettings['appname'] ?> | WebHosting">
  <meta name="description" content="<?= $getsettings['description'] ?>">
  <meta name="og:description" content="<?= $getsettings['description'] ?>">
  <meta name="theme-color" content="#335BFF">
  <meta name="keywords" content="<?= $getsettings['keywords'] ?>">
  <meta name="generator" content="Ignition-Development - <?= $getsettings['appname'] ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <link rel="stylesheet" href="../assets/dash/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../assets/dash/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <link rel="stylesheet" href="../assets/dash/css/argon.css" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-dark bg-dark" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  d-flex  align-items-center">
        <a class="navbar-brand" href="/">
          <img src="<?= $getsettings['applogo'] ?>" class="navbar-brand-img" alt="Logo">
        </a>
        <div class=" ml-auto ">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <?php
            require("../require/navbar.php");
            foreach ($_NAVBAR as $item) {
                ?>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= $item["link"] ?>">
                            <i class="<?= $item["icon"] ?> text-primary"></i>
                            <span class="nav-link-text"><?= $item["text"] ?></span>
                        </a>
                    </li>
                </ul>
                <?php
            }
            ?>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">
            <span class="docs-normal">Links</span>
          </h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">

              <a class="nav-link" href="<?= $getsettings['webpanel'] ?>" target="_blank">
                <i class="fas fa-gamepad"></i>
                <span class="nav-link-text">Web Panel</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $getsettings['websitelink'] ?>" target="_blank">
                    <i class="fas fa-home"></i>
                    <span class="nav-link-text">Website</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= $getsettings['statuspage'] ?>" target="_blank">
                    <i class="fas fa-signal"></i>
                    <span class="nav-link-text">Status page</span>
                </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?php
    if ($_SERVER['REQUEST_URI'] == "/") {
        $navcolor = "default";
    } else {
        $navcolor = "primary";
    }
    ?>
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-<?= $navcolor ?> border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item" style="color: white;">
            12 Coins
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="<?= $getsettings['webpanel'] ?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="fas fa-gamepad"></i>
                    </span>
                    <small>Web panel</small>
                  </a>
                  <a href="<?= $getsettings['websitelink'] ?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="fas fa-home"></i>
                    </span>
                    <small>Website</small>
                  </a>
                  <a href="<?= $getsettings['statuspage'] ?>" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="fas fa-signal"></i>
                    </span>
                    <small>Status</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="<?= $userdb['avatar'] ?>">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?= $userdb['username'] ?></span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="/auth/logout" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<!--- MODALS -->
<div class="modal fade" id="modal-logout" tabindex="-1" role="dialog" aria-labelledby="modal-logout" aria-hidden="true">
    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">We need your confirmation</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="py-3 text-center">
                    <i class="ni ni-user-run"></i>
                    <h4 class="heading mt-4">Are you sure?</h4>
                    <p>This will change your password. You'll be logged out of every device your account is connected to.</p>
                </div>
            </div>
            <div class="modal-footer">
                <a href="/auth/logout" class="btn btn-white">Logout</a>
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!--- BEGINNING OF THE CONTENT -->
