<header class="header">
    <div class="container-fluid">

        <div class="row">
            <div class="top-nav flex-row space-end">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="contact">Contact</a></li>
                    <li class="active"><a href="#">Location</a></li>
                </ul>
                <form class="form-inline">
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
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Prodcuts <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">drop link 1</a></li>
                        <li><a href="#">drop link 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">User/Applications <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">drop link 1</a></li>
                        <li><a href="#">drop link 2</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Research & Development <span class="caret"></span></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">drop link 1</a></li>
                        <li><a href="#">drop link 2</a></li>
                      </ul>
                    </li>
                    <li class=""><a href="{{ URL::to('/about') }}">About Us</a></li>
                    <li class=""><a href="{{ URL::to('/contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>


    </div>
</header>
