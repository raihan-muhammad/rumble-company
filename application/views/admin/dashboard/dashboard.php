<!-- Header -->
    <div class="header pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-lg-6 mb-4">
              <a href="<?= site_url('admini') ?>">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Admin</h5>
                      <span class="h2 font-weight-bold mb-0"><?= $jumlah ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Daftar Admin Rumble</span>
                  </p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
            <a href="<?= site_url('produk') ?>">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Produk</h5>
                      <span class="h2 font-weight-bold mb-0"><?= $jumlahProduk ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Daftar Produk Rumble</span>
                  </p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
            <a href="<?= site_url('portofolio') ?>">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Portofolio</h5>
                      <span class="h2 font-weight-bold mb-0"><?= $jumlahPortofolio ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Daftar Portofolio Rumble</span>
                  </p>
                </div>
              </div>
              </a>
            </div>
            <div class="col-xl-4 col-lg-6 mb-4">
            <a href="<?= site_url('slider') ?>">
              <div class="card card-stats mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Slider</h5>
                      <span class="h2 font-weight-bold mb-0"><?= $jumlahSlider; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="mt-3 mb-0 text-muted text-sm">
                    <span class="text-nowrap">Daftar Slider</span>
                  </p>
                </div>
              </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>