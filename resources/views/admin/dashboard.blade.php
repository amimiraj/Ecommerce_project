<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="icon" type="image/ico" href="{{asset('/')}}public/front_end/images/favicon-16x16.png">
        <title>Dashboard</title>
        @include('admin.layout.header_link')
    </head>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

        <div class="wrapper">
            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{url('/dashboard')}}" class="brand-link ">
                    <span class="brand-text font-weight-light ">Hour Publications</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                            <li class="nav-item has-treeview menu-open">
                                <a href="{{url('/home')}}" class="nav-link active">                      
                                    <p>
                                        Dashboard
                                    </p>
                                </a>
                            </li>

                            <!----------------------------------------------------------------------- Category ------------------------------------->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Category
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{url('categories/create')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Category</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{URL::to('/all-category')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Category</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!-----------------------------------------------------------------------Manufacturer------------------------------------->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Manufacturer
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{url('/add-manufacturer')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add  Manufacturer</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/all-manufacturer')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage  Manufacturer</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <!-----------------------------------------------------------------------Product------------------------------------->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Product
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{url('product/create')}}"class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add  Product</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{url('/all-product')}}"class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage  Product</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <!-----------------------------------------------------------------------Slider------------------------------------->

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Slider
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{url('sliders/create')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Add Slider</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{URL::to('/sliders/all_slider')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Slider</p>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                            <!----------------------------------------------------------------------- Orders------------------------------------->
                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Orders
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{URL::to('/show-order')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Order</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--------------------------------------------------------------------- Contacts------------------------------------>

                            <li class="nav-item has-treeview">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-tree"></i>
                                    <p>
                                        Contacts
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="{{URL::to('/show-contact')}}" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Manage Contact</p>
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

            <div class="card-footer text-right ">
                <a href="{{url('/logout')}}"> <button type="submit" class="btn btn-danger ">Log out</button></a>
            </div>


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Main content -->
                @yield('main-content')
                <!-- /.content -->
            </div>




            <!-- /.content-wrapper -->

            <!-- Main Footer -->
            <footer class="main-footer">
                <!--<strong>Copyright &copy; 2014-2019</strong>-->
                <!--All rights reserved.-->
                <!--                <div class="float-right d-none d-sm-inline-block">
                                    <b>Version</b> 3.0.5
                                </div>-->
            </footer>
        </div>
        <!-- ./wrapper -->
        @include('admin.layout.footer_link')

    </body>
</html>
