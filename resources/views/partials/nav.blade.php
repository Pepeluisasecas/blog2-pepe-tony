<nav class="custom-wrapper" id="menu">
    <div class="pure-menu"></div>
    <ul class="container-flex list-unstyled">
        <li><a href="{{ route('pages.home') }}" class="text-uppercase {{ setActiveRoute('pages.home') }}">Home</a></li>
        <li><a href="{{ route('pages.about') }}" class="text-uppercase {{ setActiveRoute('pages.about') }}">About</a>
        </li>
        <li><a href="{{ route('pages.archive') }}"
               class="text-uppercase {{ setActiveRoute('pages.archive') }}">Archive</a></li>
        <li><a href="{{ route('pages.contact') }}"
               class="text-uppercase {{ setActiveRoute('pages.contact') }}">Contact</a></li>
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-default">Cerrar Sesión</button>
            </form>
        @endauth

        @guest
            <form action="{{ route('login') }}" method="get">
                @csrf
                <button class="btn btn-default">Iniciar Sesión</button>
            </form>
        @endguest
    </ul>
</nav>
