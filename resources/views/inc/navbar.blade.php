<nav class="navbar transparent navbar-expand-lg navbar-light">
    <a class="navbar-brand" href="/"><span class="jl">JL.</span><span class="jl-full">Jimmy Laroche.</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto d-flex align-items-center">
            <li class="nav-item mx-3 {{ Request::routeIs('work') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('work') }}">Work</a>
            </li>
            <li class="nav-item mx-3 {{ Request::routeIs('about') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('about') }}">About</a>
            </li>
            <li class="nav-item mx-3 {{ Request::routeIs('contact') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
            </li> 
            <li class="nav-item mx-3">
                <a class="nav-link" href="{{ route('download') }}" title="Download my resumé" data-toggle="tooltip" data-placement="bottom">Resumé <i class="fas fa-download"></i></a>
            </li>
        </ul>
    </div>
</nav>