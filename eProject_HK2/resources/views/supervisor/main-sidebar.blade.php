<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="SUPERVISOR SITE" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-heavy text-light">SUPERVISOR SITE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('img/avatarBusiness.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block text-light">Hi! {{Session::get('user')->LNAME." ".Session::get('user')->FNAME}}</a>
                <a href="{{ url('/logout') }}" id="logout-btn2" class="d-block mt-2">Sign-out <i class="fas fa-sign-out-alt"></i></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview ">
                    <a href="#" class="nav-link text-light">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Member
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ url('supervisor/member/home') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>View Member</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('supervisor/member/create') }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Add new member</p>
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
        $('#logout-btn2').click(function(){
            if(confirm('Do you want to log out?')){
                return true;
            }
            else {
                return false;
            }
        });
    });
</Script>