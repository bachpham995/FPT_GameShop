<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="ADMIN SITE" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-heavy text-light">ADMIN SITE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if(Session::get('user') != null)
                    @if(Session::get('user') != null && Session::get('user')->AVATAR != '')
                        <img src="{{Session::get('user')->AVATAR}}" class="image-rectangle elevation-2" alt="User Image">
                    @else
                        <img src="{{ asset('img/maleAvatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    @endif
                @else
                    <img src="{{ asset('img/maleAvatar.jpg') }}" class="img-circle elevation-2" alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block text-light">Hi! {{Session::get('user')->LNAME." ".Session::get('user')->FNAME}}</a>
                <a href="{{ url('/logout') }}" id='logout-btn' class="d-block mt-2">Sign-out <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            All Products
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/products/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Products</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/products/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new Product</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Publisher
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/publisher/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Publisher</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/publisher/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new publisher</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Producer
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/producer/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Producer</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/producer/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new Producer</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Category
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/category/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Category</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/category/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new Category</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Operating System
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/os/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View OS</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('admin/os/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new OS</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                             Order
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('admin/order/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Order</p>
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
<Script>
    $(function(){
        $('#logout-btn').click(function(){
            if(confirm('Do you want to log out?')){
                return true;
            }
            else {
                return false;
            }
        });
    });
</Script>
