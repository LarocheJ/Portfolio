<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- favicon --}}
    <link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
    <title>{{ config('APP_NAME', 'Jimmy Laroche')}} | {{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    {{-- Dropzone --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/dropzone.css') }}"> --}}
    {{-- <script src="{{ asset('js/dropzone.js') }}"></script> --}}
    {{-- jQuery --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    {{-- CK editor --}}
    <script src="{{ asset('js/ckeditor.js') }}"></script>
</head>
<body>

{{-- @include('inc.header') --}}

{{-- <div class="container">

   

    @yield('content')

</div> --}}

{{-- Bootstrap Dashboard --}}


<nav class="navbar navbar-dark flex-md-nowrap py-2 shadow">
    <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="{{ route('dashboard') }}" title="Home">Jimmy Laroche.</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
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
                    <a href="{{ route('dashboard') }}" id="dash-nav" class="nav-link text-white" title="Go to Dashboard">Signed in as {{ Auth::user()->name }}</a>
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
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block text-white sidebar collapse border-right">
            <div class="sidebar-sticky pt-3">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}" target="_blank">
                            <span data-feather="home"></span>
                            <span class="icon"><i class="fas fa-external-link-alt"></i></span> View Site
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">
                            <span data-feather="file"></span>
                            <span class="icon"><i class="fas fa-clipboard-list"></i></span> Projects
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <span data-feather="shopping-cart"></span>
                            <span class="icon"><i class="far fa-chart-bar"></i></span> Stats (coming soon)
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-4">

            @yield('content')

        </main>
    </div>
</div>

<script>

    function goBack() {
        history.back();
    }

    $('table[data-form="projectForm"]').on('click', '.form-delete', function(e){
        e.preventDefault();
        var $form=$(this);

        $('#confirm').modal({ backdrop: 'static', keyboard: false })
            .on('click', '#delete-btn', function(){
                $form.submit();
        });

    });

</script>

</body>
</html>

