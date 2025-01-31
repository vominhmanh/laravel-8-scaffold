<div id="fb-root"></div>
<div id="fb-customer-chat" class="fb-customerchat"></div>
<header class="header fixed">
    <div class="container-fluid container-fixed">
        <nav class="navbar navbar-expand-lg navbar-expand-md navbar-expand-sm navbar-light">
            <a class="navbar-brand" href="#">
                <div class="img-logo">
                    <img src="{{ asset('images/hapo_learn.png') }}" alt="Hapolearn Banner">
                </div>
            </a>
            <button class="navbar-btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-btn collapse navbar-collapse navbar-menu-div" id="navbarNav" class="navbar-toggler"
                type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
                aria-expanded="false" aria-label="Toggle navigation">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('home')) active @endif " href="{{ route('home') }}">HOME<span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('course*')) active @endif" href="{{ route('course') }}">ALL COURSES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if (Route::is('lesson*')) active @endif" href="{{ route('lesson') }}">LESSON DETAILS</a>
                    </li>
                    <li class="nav-item d-xl-none">
                        <a class="nav-link" href="#">CONTACT</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#" data-toggle="modal" data-target="#loginModal"
                                id="login-btn">LOGIN/REGISTER</a>
                        </li>
                    @else
                        <li class="dropdown nav-item d-none d-sm-block">
                            <a class="nav-link dropdown-toggle @if (Route::is('profile*')) active @endif"" id=" dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-user" style="font-size: 20px"></i>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu profile-dropdown" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item text-center" type="button"
                                    href="{{ route('profile') }}">PROFILE</a>
                                <a class="dropdown-item text-danger text-center" type="button" href="#"
                                    onclick="logoutform.submit()">LOGOUT</a>
                            </div>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link @if (Route::is('profile*')) active @endif" href="{{ route('profile') }}"><i
                                    class="fas fa-user" style="font-size: 20px"></i>
                                {{ Auth::user()->name }}</a>
                        </li>
                        <li class="nav-item d-sm-none">
                            <a class="nav-link danger-link" onclick="logoutform.submit()" href="#">LOGOUT</a>
                            <form action="{{ route('logout') }}" name="logoutform" class="hidden" method="post">
                                @csrf
                                <input type="submit" class="nav-link text-danger" href="#" value='LOGOUT'>
                            </form>
                        </li>
                    @endguest
                    <li class="nav-item align d-lg-none d-md-none d-sm-none">
                        <a class="nav-link" href="#"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>

<div class="align d-lg-none d-md-none d-sm-none"></div>
@guest
    @include('login_modal')
@endguest
