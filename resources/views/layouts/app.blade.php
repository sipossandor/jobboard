<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          crossorigin="anonymous"/>
    <link href="{{ asset('/css/site.css') }}" rel="stylesheet"/>
    <title>@yield('title', 'Career Page')</title>
</head>
<body>
<!-- header -->
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">Career Page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                <a class="nav-link active" href="{{ route('managers.index') }}">Management</a>
                <a class="nav-link active" href="{{ route('job_openings.index') }}">Job Openings</a>
                <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                @guest
                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                    <a class="nav-link active" href="{{ route('register') }}">Register</a>
                @else
                    <a class="nav-link active" href="{{ route('user.index') }}">My Profile</a>
                    <form id="logout" action="{{ route('logout') }}" method="POST">
                        <a role="button" class="nav-link active"
                           onclick="document.getElementById('logout').submit();">Logout</a>
                        @csrf
                    </form>
                    @if (Auth::user()->isAdministrator())
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('admin.home.index') }}">Admin</a>
                        </li>
                    @endif
                @endguest

            </div>
        </div>
    </div>
</nav>
<header class="masthead bg-primary text-white text-center py-4">
    <div class="container d-flex align-items-center flex-column">
        <h2>@yield('subtitle', 'A Laravel Online Page')</h2>
    </div>
</header>
<!-- header -->

<div class="container my-4">
    @yield('content')
</div>

<div class="clear"></div>

<!-- footer -->
<footer id="footer">
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright - <b>Nóra Zatykó</b> - <b>Sándor Sipos</b>
            </small>
        </div>
    </div>
</footer>
<!-- footer -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
</script>
</body>
</html>
