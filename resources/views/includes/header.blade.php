<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">Movies</div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('home')) active @endif"
                            href="{{ url('/') }}">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('about')) active @endif"
                            href="{{ route('about') }}">About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('contacts')) active @endif"
                            href="{{ route('contacts') }}">Contacts
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
