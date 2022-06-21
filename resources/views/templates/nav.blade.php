<style>
@media(max-width: 420px) {
    .logo {
        width: 85%!important;
    }
    .navbar-brand {
        margin: 0;
        padding: 0;
    }
}
@media(max-width: 270px) {
    .logo {
        width: 70%!important;
    }
}
@media (max-width: 768px) {
    .nav-item:hover { 
        background: #8f938f21;
    }
}
</style>
<nav class="navbar navbar-expand-md shadow-sm sticky-top navbar-light bg-white pt-0">
    <div class="container">
        <div class="row">
            <div class="col p-0 p-md-auto">
                <a class="navbar-brand" href="{{ url('') }}">
                    <img class="logo" src="{{ asset('images/logo.png') }}" alt="" width="220" height="60">
                </a>
            </div>
        </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#websiteTopNav" aria-controls="websiteTopNav" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse align-self-end" id="websiteTopNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mr-md-4 align-self-lg-center"><a href="{{ url('#coupons') }}" class="nav-link menu_items">Coupons</a></li>
                <li class="nav-item mr-md-4 align-self-lg-center"><a href="{{ url('#for-business') }}" class="router-link-active router-link-exact-active nav-link menu_items" aria-current="page">For Business</a></li>
                <li class="nav-item mb-2 mb-md-auto me-md-2 align-self-lg-center"><a href="{{ url('write-a-review') }}" class="nav-link btn d-block main-btn px-3 btn-important">Write a review</a></li>
                @if(!Auth::user())
                <li class="nav-item mb-2 mb-md-auto mr-md-4 me-md-2 align-self-lg-center"><a href="{{ route('register') }}" class="nav-link btn d-block secondary-outline-btn px-3 btn-important">Sign Up</a></li>
                <li class="nav-item mr-md-4 align-self-lg-center"><a href="{{ route('login') }}" class="btn d-block text-danger px-3 btn-important"><small><i class="ti-user"></i></small> Login</a></li>
                @else

                <li class="nav-item dropdown mr-lg-4 align-self-lg-center">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li>
                        <a class="dropdown-item" href="{{ url('profile/'.Auth::user()->slug) }}">Profile</a>
                    </li>
                    @if(Auth::user()->hasRole('Admin'))
                    <li>
                        <a class="dropdown-item" href="{{ url('admin') }}">Dashboard</a>
                    </li>
                    <li><hr class="dropdown-divider"></li>
                    @endif
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <style>
                                .logout:focus {
                                    box-shadow: none;
                                }
                            </style>
                            <button class="dropdown-item logout btn btn-link">Logout</button>
                        </form>
                    </li>
                </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>