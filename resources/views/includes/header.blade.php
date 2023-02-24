<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="navbar-brand">Movies</div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('home')) current @endif"
                            href="{{ url('/') }}">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('about')) current-1 @endif"
                            href="{{ route('about') }}">About
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (request()->routeIs('contacts')) current-2 @endif"
                            href="{{ route('contacts') }}">Contacts
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
