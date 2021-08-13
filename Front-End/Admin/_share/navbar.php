<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../Front-End/index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Sale Products</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="./index.php" class="d-block">Sale Products</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-clone">&nbsp;</i>
                        <p>
                            Category
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="category.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./add-form-category.php" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Create </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-splotch">&nbsp;</i>
                        <p>
                            Products
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./products.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./add-form-product.php" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Create </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="fas fa-address-card">&nbsp;</i>
                        <p>
                           Users
                            <i class="fas fa-angle-left right">&nbsp;</i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="./users.php" class="nav-link">
                                <i class="fas fa-list nav-icon">&nbsp;</i>
                                <p>List</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="./add-form-user.php" class="nav-link">
                                <i class="fas fa-plus-circle">&nbsp;</i>
                                <p>Create </p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item has-treeview">
                    <a href="logout.php" class="nav-link">
                        <i class="fas fa-arrow-alt-circle-left"></i>
                        <p>
                            Logout
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
    </ul>
</nav>