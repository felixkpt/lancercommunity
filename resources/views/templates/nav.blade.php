<nav class="navbar navbar-expand-md shadow-sm sticky-top navbar-light bg-white pt-0">
    <div class="container"><a class="navbar-brand" href="{{ url('') }}"><img src="{{ asset('images/logo.png') }}" alt="" width="220" height="60"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#websiteTopNav" aria-controls="websiteTopNav" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="websiteTopNav" style="">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item mr-lg-4 align-self-lg-center"><a href="{{ url('coupons') }}" class="nav-link menu_items">Coupons</a></li>
                <li class="nav-item mr-lg-4 align-self-lg-center"><a href="{{ url('company/fiverr') }}" class="router-link-active router-link-exact-active nav-link menu_items" aria-current="page">For Business</a></li>
                <li class="nav-item mr-lg-4 align-self-lg-center"><a href="{{ url('write-a-review') }}" class="nav-link btn btn-block main-btn px-3 btn-important">Write a review</a></li>
                @if(!Auth::user())
                <li class="nav-item mr-lg-4 align-self-lg-center"><a href="{{ route('register') }}" class="nav-link btn btn-block secondary-outline-btn px-3 btn-important">Sign Up</a></li>
                <li class="nav-item mr-lg-4 align-self-lg-center"><a href="{{ route('login') }}" class="nav-link menu_items login"><small><i class="ti-user"></i></small> Login</a></li>
                @else

                <li class="nav-item dropdown mr-lg-4 align-self-lg-center">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Account
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    @if(Auth::user()->can('role-list'))
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
                            <button class="dropdown-item logout btn btn-link" style="focus:0">Logout</button>
                        </form>
                    </li>
                </ul>
                </li>
                @endif
            </ul>
        </div>
    </div>
</nav>