
<style>
    i {
        margin-right: 5px;
    }

/*
    .sidebar-light-primary{
        background-color: rgb(0, 217, 255);

    }

    aside i,
    aside p ,
    #user,
    .brand-text
    {
        color: white;
    } */
</style>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Waroeng</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a id="user" class="d-block">Fikri Fauzan</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav id="#side-men" class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <a href="/product" class="nav-link {{ Request::is('/product') ? 'active' : ''}}">
                <i class="fab fa-product-hunt"></i>
              <p>
                 Products
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="/product" class="nav-link {{Request::is('product') ? 'active' : ''}}">
                    <i class="fas fa-list"></i>

                      <p>List Product</p>
                  </a>
                </li>
              <li class="nav-item">
                <a href="/product/create" class="nav-link {{Request::is('product/create') ? 'active' : ''}}">
                    <i class="far fa-edit"></i>
                    <p>Create Product</p>
                </a>
              </li>
            </ul>
          </li>


          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                    <a href="/stockofname" class="nav-link {{Request::is('stockofname') ? 'active' : ''}}">
                        <i class="fas fa-th-list"></i>

                        <p>List Stock Of Name</p>
                    </a>
                  </li>
                <li class="nav-item">
                  <a href="/stockofname/create" class="nav-link {{Request::is('stockofname/create') ? 'active' : ''}}">
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
