<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="{{ url('/') }}"><img src="../images/logo/logo-white.png" alt="" class="logo"></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="">Lost</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#">Found</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('search') }}">Search</a>
                </li>
                @guest
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('log-in') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{route('utilisateur.index')}}">Register</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('/edituser')}}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('/logout')}}">Déconnexion</a>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>

