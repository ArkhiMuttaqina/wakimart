  <div class="nk-sidebar nk-sidebar-fixed is-light " data-content="sidebarMenu">
      <div class="nk-sidebar-element nk-sidebar-head">
          <div class="nk-menu-trigger">
              <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em
                      class="icon ni ni-arrow-left"></em></a>
              <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em
                      class="icon ni ni-menu"></em></a>
          </div>
          <div class="nk-sidebar-brand">
              <a href="#" class="nk-sidebar-logo">
                  <img class="logo-light logo-img" src="{{ asset('src_dashboard/') }}/images/logo.png"
                      srcset="{{ asset('src_dashboard/') }}/images/logo2x.png 2x" alt="logo">
                  <img class="logo-dark logo-img" src="{{ asset('src_dashboard/') }}/images/logo-dark.png"
                      srcset="{{ asset('src_dashboard/') }}/images/logo-dark2x.png 2x" alt="logo-dark">
              </a>
          </div>
      </div><!-- .nk-sidebar-element -->

      <div class="nk-sidebar-element nk-sidebar-body">
          <div class="nk-sidebar-content">
              <div class="nk-sidebar-menu" data-simplebar>
                  <ul class="nk-menu">
                      <li class="nk-menu-item">
                          <a href="{{ route('dashboard') }}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-home-fill"></em></em></span>
                              <span class="nk-menu-text">Dashboard</span>
                          </a>
                      </li><!-- .nk-menu-item -->
                      <li class="nk-menu-heading">
                          <h6 class="overline-title text-primary-alt">Master Admin ERP</h6>
                      </li><!-- .nk-menu-item -->
                      <li class="nk-menu-item ">
                          <a href="{{ route('adminerp') }}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-users-fill"></em></span>
                              <span class="nk-menu-text">Admin ERP</span>
                          </a>
                      </li><!-- .nk-menu-item -->
                      <li class="nk-menu-item">
                          <a href="{{ route('karyawan') }}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-user-list-fill"></em></span>
                              <span class="nk-menu-text">Karyawan</span>
                          </a>
                      </li><!-- .nk-menu-item -->
                      <li class="nk-menu-item">
                          <a href="{{ route('cuti') }}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-calendar-fill"></em></span>
                              <span class="nk-menu-text">Cuti Karyawan</span>
                          </a>
                      </li><!-- .nk-menu-item -->
                      <li class="nk-menu-heading">
                          <h6 class="overline-title text-primary-alt">Aplikasi</h6>
                      </li><!-- .nk-menu-item -->
                      <li class="nk-menu-item">
                          <a href="{{ route('perubahan') }}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-link-group"></em></span>
                              <span class="nk-menu-text">Perubahan</span>
                          </a>
                      </li><!-- .nk-menu-item -->
                      <li class="nk-menu-item">
                          <a href="{{ route('tentangapp') }}" class="nk-menu-link">
                              <span class="nk-menu-icon"><em class="icon ni ni-package-fill"></em></span>
                              <span class="nk-menu-text">Tentang App</span>
                          </a>
                      </li><!-- .nk-menu-item -->
                  </ul><!-- .nk-menu -->
              </div><!-- .nk-sidebar-menu -->
          </div><!-- .nk-sidebar-content -->
      </div><!-- .nk-sidebar-element -->
  </div>
