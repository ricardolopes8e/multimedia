
<!-- end of nav -->


    <div class="navbar-dropdown has-text-black	">
        <a class="navbar-item anav" href="{{ route('organizations.index') }}">Organizations </a>
        <a class="navbar-item" href="about.html">
            Players
        </a>
        <a class="navbar-item" href="contact.html">
            Competitions
        </a>

        <a class="navbar-item" href="">Games </a>
        <a class="navbar-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST"
              style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>



