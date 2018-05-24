<!-- navigation -->


<nav class="navbar is-fixed-top is-orange">
    <div class="container">
        <div class="navbar-brand">
          @include('utils.logo')
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