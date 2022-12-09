<?php ?>
<nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
  <div class="container px-4">
    <a class="navbar-brand" href="<?= $getsettings['appurl'];?>">
      <img src="<?= $getsettings['applogo'];?>" />
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse-main">
      <!-- Collapse header -->
      <div class="navbar-collapse-header d-md-none">
        <div class="row">
          <div class="col-6 collapse-brand">
            <a href="<?= $getsettings['appurl'];?>">
              <img src="<?= $getsettings['applogo'];?>">
            </a>
          </div>
          <div class="col-6 collapse-close">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
              <span></span>
              <span></span>
            </button>
          </div>
        </div>
      </div>
      <!-- Navbar items -->
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="<?= $getsettings['websitelink'];?>">
            <i class="ni ni-planet"></i>
            <span class="nav-link-inner--text">Website</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="<?= $getsettings['discordinvite'];?>">
            <i class="bi bi-discord"></i>
            <span class="nav-link-inner--text">Discord</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="<?= $getsettings['statuspage'];?>">
            <i class="bi bi-hdd-stack-fill"></i>
            <span class="nav-link-inner--text">Status</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link nav-link-icon" href="<?= $getsettings['webpanel'];?>">
            <i class="bi bi-controller"></i>
            <span class="nav-link-inner--text">WebPanel</span>
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>