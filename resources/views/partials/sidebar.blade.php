<style>
    i {
        margin-right: 5px;
    }

    @import url('https://fonts.googleapis.com/css2?family=Pushster&family=Roboto+Slab:wght@100;200;300;400;500;600;700;800;900&family=Volkhov:ital,wght@0,400;0,700;1,400;1,700&display=swap');

   #brand-text {
        font-family: 'Roboto Slab', serif;
        font-weight: 200;
    }

</style>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link mt-3">
        <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8">
        <p id="brand-text" class="brand-text ">Warung Chunil</p>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">

                <a id="user" class="d-block">{{Auth::user()->name}}</a>
            </div>
        </div>



        <!-- Sidebar Menu -->
        <nav id="#side-men" class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <a href="/product" class="nav-link {{ Request::is('/product') ? 'active' : '' }}">
                    <i class="fab fa-product-hunt"></i>
                    <p>
                        Products
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/product" class="nav-link {{ Request::is('product') ? 'active' : '' }}">
                            <i class="fas fa-list"></i>

                            <p>List Product</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/product/create"
                            class="nav-link {{ Request::is('product/create') ? 'active' : '' }}">
                            <i class="far fa-edit"></i>
                            <p>Create Product</p>
                        </a>
                    </li>
                </ul>
                </li>


                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                    <a href="/product" class="nav-link">
                        <i class="fas fa-calculator"></i>
                        <p>
                            Stock Of Name
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/stockofname" class="nav-link {{ Request::is('stockofname') ? 'active' : '' }}">
                                <i class="fas fa-th-list"></i>

                                <p>List Stock Of Name</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/stockofname/create"
                                class="nav-link {{ Request::is('stockofname/create') ? 'active' : '' }}">
                                <i class="far fa-plus-square"></i>
                                <p>Create Stock Of Name</p>
                            </a>
                        </li>
                    </ul>
                    </li>
                </ul>
        </nav>

        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
