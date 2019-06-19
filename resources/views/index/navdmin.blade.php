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
                    <a class="nav-link js-scroll-trigger" href="">Question</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="#">Categorie/ville</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('search') }}">list user</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{ url('log-in') }}">Annonce</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link js-scroll-trigger" href="{{url('/logout')}}">Déconnexion</a>
                </li>
               
            </ul>
        </div>
    </div>
</nav>

