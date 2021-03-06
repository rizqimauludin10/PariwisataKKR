  <!-- Sidebar -->

  <?php if (session()->get('isLoggedIn')) : ?>


      <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

          <!-- Sidebar - Brand -->
          <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
              <div class="sidebar-brand-icon rotate-n-15">
                  <i class="fas fa-laugh-wink"></i>
              </div>
              <div class="sidebar-brand-text mx-3">Pariwisata<sup>KKR</sup></div>
          </a>

          <!-- Divider -->
          <hr class="sidebar-divider my-0">

          <!-- Nav Item - Dashboard -->
          <li class="nav-item active">
              <a class="nav-link" href="#">
                  <i class="fas fa-fw fa-tachometer-alt"></i>
                  <span>Dashboard</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Menu
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('wisata/'); ?>">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Destinasi</span></a>
          </li>
          <!-- <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Kategori Wisata :</h6>
                      <a class="collapse-item" href="buttons.html">Wisata Alam</a>
                      <a class="collapse-item" href="buttons.html">Wisata Budaya</a>
                      <a class="collapse-item" href="buttons.html">Wisata Religi</a>
                      <a class="collapse-item" href="buttons.html">Wisata Buatan</a>
                      <a class="collapse-item" href="buttons.html">Wisata Agrowisata</a>
                      <a class="collapse-item" href="buttons.html">Wisata Kuliner</a>
                      <a class="collapse-item" href="buttons.html">Minat Khusus</a>
                      <a class="collapse-item" href="buttons.html">Pusat Oleh-oleh</a>
                  </div>
              </div> -->
          </li>

          <!-- Nav Item - Utilities Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                  <i class="fas fa-fw fa-wrench"></i>
                  <span>Profile</span>
              </a>
              <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Profile :</h6>
                      <a class="collapse-item" href="<?= base_url('profile/'); ?>">Profile</a>
                      <a class="collapse-item" href="<?= base_url('visi/'); ?>">Visi</a>
                      <a class="collapse-item" href="<?= base_url('misi/'); ?>">Misi</a>
                      <a class="collapse-item" href="utilities-other.html">Other</a>
                  </div>
              </div>
          </li>


          <!-- Divider -->
          <hr class="sidebar-divider">

          <!-- Heading -->
          <div class="sidebar-heading">
              Menu Lainnya
          </div>

          <!-- Nav Item - Pages Collapse Menu -->
          <li class="nav-item">
              <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                  <i class="fas fa-fw fa-folder"></i>
                  <span>Landing Pages</span>
              </a>
              <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                  <div class="bg-white py-2 collapse-inner rounded">
                      <h6 class="collapse-header">Landing Page Section :</h6>
                      <a class="collapse-item" href="login.html">Cover</a>
                      <a class="collapse-item" href="register.html">Top Destinasi</a>
                      <a class="collapse-item" href="register.html">Gallery</a>
                      <a class="collapse-item" href="register.html">Artikel Terkait</a>
                      <!-- <div class="collapse-divider"></div>
                  <h6 class="collapse-header">Other Pages:</h6>
                  <a class="collapse-item" href="404.html">404 Page</a>
                  <a class="collapse-item active" href="blank.html">Blank Page</a> -->
                  </div>
              </div>
          </li>

          <!-- Nav Item - Charts -->


          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('hotel/'); ?>">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Hotel</span></a>
          </li>

          <li class="nav-item">
              <a class="nav-link" href="<?= base_url('event/'); ?>">
                  <i class="fas fa-fw fa-chart-area"></i>
                  <span>Event</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
              <a class="nav-link" href="tables.html">
                  <i class="fas fa-fw fa-table"></i>
                  <span>Kategori</span></a>
          </li>

          <!-- Divider -->
          <hr class="sidebar-divider d-none d-md-block">

          <!-- Sidebar Toggler (Sidebar) -->
          <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
          </div>

      </ul>

  <?php endif; ?>
  <!-- End of Sidebar -->