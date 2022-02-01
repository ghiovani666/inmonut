  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="homes" class="brand-link">
          <img src="/template_admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
              class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Dashboard</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="/template_admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="#" class="d-block">{{ Auth::user()->tipo_user == 1 ? "Administrador" : "Usuario"  }}</a>
              </div>
          </div>
          @if(Auth::user()->tipo_user == 1)
          <!-- Sidebar Admin -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p> Home<i class="fas fa-angle-left right"></i> </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="bienvenidos" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Bienvenidos</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="quienesSomos" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>¿Quiénes Somos?</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="localizacion" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <!-- <p>Localización</p> -->
                                  <p>Contacto</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="slider" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Slider & Footer</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="fitness" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Producto Modelo</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="clases" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <!-- <p>Clases</p> -->
                                  <p>Producto Especial</p>
                              </a>
                          </li>
                          <li class="nav-item">
                              <a href="entrenador" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Producto Top</p>
                              </a>
                          </li>

                      </ul>
                  </li>


                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p>
                              Productos
                              <i class="fas fa-angle-left right"></i>
                          </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="adminServicioHello" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Tabla Servicios</p>
                              </a>
                          </li>
                      </ul>
                  </li>

                  
              </ul>
          </nav>
          @else
          <!-- Sidebar Usuario -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="nav-icon fas fa-copy"></i>
                          <p> Home<i class="fas fa-angle-left right"></i> </p>
                      </a>
                      <ul class="nav nav-treeview">
                          <li class="nav-item">
                              <a href="#" class="nav-link">
                                  <i class="far fa-circle nav-icon"></i>
                                  <p>Reservas</p>
                              </a>
                          </li>
                      </ul>
                  </li>
              </ul>
          </nav>
          @endif
      </div>

  </aside>