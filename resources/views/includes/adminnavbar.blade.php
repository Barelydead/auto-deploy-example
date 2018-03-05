<header class="header">
    <div class="container-fluid">

        <div class="row">
            <div class="top-nav flex-row space-end">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="contact">Contact</a></li>
                    <li class="active"><a href="#">Location</a></li>
                </ul>
                <form class="form-inline" action="{{ URL::to('/search') }}">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="search page content">
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="navbar-wrap flex-row space-between main-nav">
                <div class="logo-wrap">
                    <a href="#"><img src="img/rdc_logo.png" alt="logo" class="contained-img"></a>
                </div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="{{ URL::to('/') }}">Home</a></li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Edit Content <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="{{ URL::to('/admin/content/home') }}">Home</a></li>
                        <li><a href="{{ URL::to('/admin/content/about') }}">About Us</a></li>
                        <li><a href="{{ URL::to('/admin/content/products') }}">Product</a></li>
                        <li><a href="{{ URL::to('/admin/content/research') }}">Research</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ URL::to('/admin/contact/contact-form') }}">Configuration</a></li>
                            <li><a href="{{ URL::to('/admin/contact/address') }}">Address</a></li>
                            <li><a href="{{ URL::to('/admin/contact/messages') }}">Messages</a></li>
                        </ul>
                    </li>
                    <li class="active"><a href="#">Edit users</a></li>
                </ul>
                @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                    <li style='list-style-type: none;' class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('adminindex') }}">
                                    Admin
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            </div>
        </div>


    </div>
</header>
