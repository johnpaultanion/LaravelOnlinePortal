<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-info elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      {{-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-bold ml-4">E-LEARNING</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt text-white"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book text-white"></i>
              <p>
                Lessons
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/lessons" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Lessons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/admin/lessons/create" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Create Lesson</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user text-white"></i>
              <p>
                Students
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/admin/students/student" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Enrolled Students</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="/admin/students/inquired" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inquired Students</p>
                </a>
              </li>
             
            </ul>
          </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- /Main Sidebar Container -->