<nav class="header navbar navbar-expand navbar-dark navbar-light">

  <!-- Left navbar links -->
  <a href="/" class="brand-link">
      {{-- <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
      <span class="brand-text font-weight-bold ml-4"><img class="logo1"  src="/img/logo-top.png" alt=""></span>
    </a>
  

  <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown user-menu">
          <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
             <i class="far fa-user p-2"></i>
              <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
              <!-- User image -->
              <li class="user-header bg-primary">
                  <img src="https://infyom.com/images/logo/blue_logo_150x150.jpg"
                       class="img-circle elevation-2"
                       alt="User Image">
                  <p>
                      {{ Auth::user()->name }}
                      <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                  </p>
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                  <a href="#" class="btn btn-default btn-flat float-right"
                     onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                      Sign out
                  </a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                  </form>
              </li>
          </ul>
      </li>
  </ul>
</nav>