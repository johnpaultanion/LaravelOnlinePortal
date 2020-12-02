
<nav class="navbar navbar-expand-md navbar-white navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/">E-Learning</a>
        <button class="navbar-toggler mb-2" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item">
                    <div class="input-group">
                        <input type="search" class="form-control form-control-navbar" placeholder="Search">
                        <div class="input-group-append">
                            <button class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </li>
                @if (Auth::user())
                    @if (Auth::user()->role == 'teacher')
                        <li class="nav-item">
                            <a class="nav-link" href="/admin/dashboard">Dashboard</a>
                        </li>
                    @endif
                   
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Sign Up</a>
                    </li>
                @endif
            </ul>
       
        </div>  
    </div>
</nav>