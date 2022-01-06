<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/product" class="nav-link">Produk</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="/stockofname" class="nav-link">Stock Of Name</a>
        </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Navbar Search -->

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false"><i class="far fa-user"></i>
                {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <form  action="/logout" method="POST" >
                    @csrf
                    <button class="dropdown-item"><i class="fas fa-sign-out-alt"></i> Log
                        out</button>
                </form>
            </div>
        </li>

        <!-- Messages Dropdown Menu -->

        <!-- Message Start -->

        <!-- Message End -->

        <!-- Message End -->

        <!-- Message Start -->

        <!-- Message End -->

        <!-- Notifications Dropdown Menu -->
    </ul>
</nav>
<!-- /.navbar -->
