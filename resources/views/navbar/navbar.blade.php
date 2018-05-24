<!-- navigation -->


<nav class="navbar is-orange">
    <div class="container">
        <div class="navbar-brand">
            <a class="nav-item" href="{{ __('/') }}">
                <h3 class="title title-text is-3" style="color: #000000">E-STUFF</h3>
            </a>
        </div>

        <div class="navbar-menu" id="navMenu">
            <div class="navbar-start">

            </div>

            <div class="navbar-end" >
                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link" ></a>

                @guest
                    @include('navbar.guest')
                @else
                    @include('navbar.logged')
                @endguest
                </div>
            </div>
        </div>
    </div>
</nav>