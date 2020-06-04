<footer>

    <div class="info">

            <div>
                <h4>Jimmy Laroche.</h4>
            </div>
            <div>
                <h4>Copyright</h4>
                <i class="far fa-copyright"></i> @php print date('Y') @endphp Jimmy Laroche. All Rights Reserved.
            </div>
            <div>
                <h4>Interested?</h4>
                <a href="{{ route('contact') }}" class="button text-white border-white">Let's chat</a>
            </div>
            <div>
                <h4>Social</h4>
                <ul>
                    <li><a href="https://www.linkedin.com/in/jimmylaroche/?locale=en_US" target="_blank" data-toggle="tooltip" data-placement="bottom" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://github.com/LarocheJ" target="_blank" data-toggle="tooltip" data-placement="bottom" title="GitHub"><i class="fab fa-github"></i></a></li>
                    <li><a href="https://codepen.io/Jlaroche/pens/public" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Codepen"><i class="fab fa-codepen"></i></a></li>
                    <li><a href="https://www.instagram.com/larochejimmy/" target="_blank" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>

    </div>


    <div class="copy">

        <div>
            All icons from <a href="https://fontawesome.com/" target="_blank">FontAwesome</a> & <a href="https://icons8.com/" target="_blank">Icons8</a>
        </div>

        <div>
            <a href="{{ route('index') }}">Home</a> <span class="horizontal-sep">|</span> <a href="{{ route('work') }}">Work</a> <span class="horizontal-sep">|</span> <a href="{{ route('about') }}">About</a> <span class="horizontal-sep">|</span> <a href="{{ route('contact') }}">Contact </a>
        </div>

        <div>
            <nav class="navbar navbar-expand-md navbar-light">

                <div class="" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Admin Login</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <div class="d-flex justify-items-between align-items-center">
                            <li class="nav-item">
                                <a href="{{ route('dashboard') }}" class="nav-link text-white" title="Go to Dashboard">Signed in as {{ Auth::user()->name }}</a>
                            </li>
                            <li>
                                <a class="nav-link text-white ml-4" href="{{ route('logout') }}" title="Logout"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {!! __('<i class="fas fa-sign-out-alt"></i>') !!}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </div>
                        @endguest
                    </ul>
                </div>
            </nav>

        </div>

    </div>

</footer>