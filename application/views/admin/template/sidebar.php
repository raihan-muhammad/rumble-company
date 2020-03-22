<nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="./index.html">
        Rumble
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <?= $_SESSION['username'] ?>
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <div class="dropdown-divider"></div>
            <a href="<?= base_url('logout') ?>" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item" id="dashboard">
            <a class="nav-link" id="menu-dashboard" href="<?= site_url('dashboard/') ?>">
              <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
          <li class="nav-item" id="dashboard">
            <a class="nav-link" id="menu-dashboard" href="<?= site_url('admini') ?>">
              <i class="ni ni-circle-08 text-primary"></i> Admin
            </a>
          </li>
          <li class="nav-item" id="slider">
            <a class="nav-link " href="<?= site_url('slider') ?>">
              <i class="ni ni-album-2 text-primary"></i> Slider
            </a>
          </li>
          <li class="nav-item" id="slider">
            <a class="nav-link " href="<?= site_url('produk') ?>">
              <i class="ni ni-archive-2 text-primary"></i> Produk
            </a>
          </li>
          <li class="nav-item" id="slider">
            <a class="nav-link " href="<?= site_url('portofolio') ?>">
              <i class="ni ni-collection text-primary"></i> Portofolio
            </a>
          </li>
          <li class="nav-item" id="slider">
            <a class="nav-link " href="<?= site_url('client') ?>">
              <i class="ni ni-building text-primary"></i> Client
            </a>
          </li>
          <li class="nav-item" id="slider">
            <a class="nav-link " href="<?= site_url('pelanggan') ?>">
              <i class="ni ni-badge text-primary"></i> Pelanggan
            </a>
          </li>
          <li class="nav-item" id="slider">
            <a class="nav-link " href="<?= site_url('setting') ?>">
              <i class="ni ni-settings-gear-65 text-primary"></i> Setting Home
            </a>
          </li>
          <li class="nav-item" id="slider">
            <a class="nav-link " href="<?= site_url('alur') ?>">
              <i class="ni ni-settings text-primary"></i> Setting Alur
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark bg-primary " id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
        <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block" href="<?= base_url('dashboard') ?>">Dashboard</a>
        
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm font-weight-bold"><?= ucfirst($_SESSION['username']) ?></span>
                </div>
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="" data-toggle="modal" data-target="#modalProfile" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="<?= site_url('logout') ?>" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    