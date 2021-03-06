<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
               Home
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">

                    <!-- Authentication Links -->
                    @guest
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/parkvereniging') }}">Parkvereniging</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/activiteiten') }}">Activiteiten</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/vogelwerkgroep') }}">Vogelwerkgroep</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/gallery') }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                            </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>

                        </ul>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/Content') }}">content</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/contactBerichten') }}">contact berichten</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/contentAanmaken') }}">content maken</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/admin/changePermissions') }}">gebruikers beheren</a>
                        </li>

                    @endguest
                </ul>
            </div>
        </div>
    </nav>


