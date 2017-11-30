<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin | GIA</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Ionicons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Data Tables-->
    <link rel="stylesheet" href="{{ asset('css/dataTables/dataTables.bootstrap.css') }}">
    <!-- Theme style-->
    <link rel="stylesheet" href="{{ asset('css/AdminLTE.css') }}">
    <link rel="stylesheet" href="{{ asset('css/skins/_all-skins.css') }}">
    <!-- FILESTACK API-->
    <script type="text/javascript" src="//api.filestackapi.com/filestack.js"></script>
    <!--script(src="//static.filestackapi.com/v3/filestack.js")-->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js')
    script(src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js')
    -->
</head>
<body class="hold-transition skin-red sidebar-mini">
<div class="example-modal">
    <div id="success" class="modal modal-success">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">x</span></button>
                    <h4 class="modal-title">Success</h4>
                </div>
                <div class="modal-body">
                    <p>Do you want to save changes you made to document before closing?</p>
                    <p class="text-warning"><small>If you don't save, your changes will be lost.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" data-dismiss="modal" class="btn btn-outline">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="myModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" data-dismiss="modal" aria-hidden="true" class="close">&times;</button>
                <h4 class="modal-title">File Viewer</h4>
            </div>
            <div class="modal-body">
                <div id="filepicker" type="filepicker-preview" style="width:100%; height:600px" data-fp-url="https://www.filestackapi.com/api/file/"></div>
            </div>
        </div>
    </div>
</div>
<div class="wrapper">
    <!-- Main Header-->
    <header class="main-header">
        <!-- Logo--><a href="/admin" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels--><span class="logo-mini"><b>GIA.</b></span>
            <!-- logo for regular state and mobile devices--><span class="logo-lg"><b>GIA</b>.</span></a>
        <!-- Header Navbar-->
        <nav role="navigation" class="navbar navbar-static-top">
            <!-- Sidebar toggle button--><a href="#" data-toggle="offcanvas" role="button" class="sidebar-toggle"><span class="sr-only">Toggle navigation</span></a>
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                    <!-- User Account Menu-->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button--><a href="#" data-toggle="dropdown" class="dropdown-toggle">
                            <!-- The user image in the navbar--><img src="http://static.tumblr.com/0hxowcx/TKtm8i1j5/iron_man_face_avatar_01.gif" alt="User Image" class="user-image"/>
                            <!-- hidden-xs hides the username on small devices so only the image appears.--><span class="hidden-xs">Admin</span></a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu-->
                            <li class="user-header"><img src="http://static.tumblr.com/0hxowcx/TKtm8i1j5/iron_man_face_avatar_01.gif" alt="User Image" class="img-circle"/>
                                <p>Dave - Engineer | Billionaire<small>@Admin</small></p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left"><a href="/" class="btn btn-primary btn-flat">Return to Website</a></div>
                                <div class="pull-right"><a href="/auth/logout" class="btn btn-danger btn-flat">Sign out</a></div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="header">MENU</li>
                <li class="treeview menu-content">
                    <a href="#">
                        <i class="fa fa-id-card-o" aria-hidden="true"></i>
                        <span class="lte-text">LTO</span>
                        <span class="pull-right-container"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/admin/student_application">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>Student Application</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/non_professional_application">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>Non-Professional Application</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/professional_application">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>Professional Application</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/license_renewal">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>License Renewal</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview menu-content">
                    <a href="#">
                        <i class="fa fa-balance-scale" aria-hidden="true"></i>
                        <span class="lte-text">NBI</span>
                        <span class="pull-right-container"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/admin/lto">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>NBI Clearance</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/nbi">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>NBI Clearance Online Application</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="treeview menu-content">
                    <a href="#">
                        <i class="fa fa-address-book-o" aria-hidden="true"></i>
                        <span class="lte-text">DFA</span>
                        <span class="pull-right-container"></span>
                    </a>
                    <ul class="treeview-menu">
                        <li>
                            <a href="/admin/lto">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>New Application</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                        <li>
                            <a href="/admin/nbi">
                                <i class="fa fa-square" aria-hidden="true"></i>
                                <span>Passport Renewal</span>
                                <span class="pull-right-container"></span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-content">
                    <a href="/admin/lto">
                        <i class="fa fa-users" aria-hidden="true"></i>
                        <span>Users</span>
                        <span class="pull-right-container"></span>
                    </a>
                </li>
            </ul>
            <!-- Content Wrapper. Contains page content-->
        </section>
    </aside>
    <div class="content-wrapper">
        @yield('content')
    </div>
    <!-- Main Footer-->
    <footer class="main-footer">
        <!-- To the right-->
        <div class="pull-right hidden-xs">Anything you want</div>
        <!-- Default to the left--><strong>Copyright © 2017 <a href="/">Government Integrated Agency</a>.</strong> All rights reserved.
    </footer>
    <!--
    Add the sidebar's background. This div must be placed
    immediately after the control sidebar
    -->
    <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper-->
<!-- REQUIRED JS SCRIPTS-->
<!-- jQuery 2.2.3-->
<script src="{{ asset('js/jquery-3.2.0.min.js') }}"></script>
<!-- Bootstrap 3.3.6-->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<!-- AdminLTE App-->
<script src="{{ asset('js/app-lte.js') }}"></script>
<!-- DataTables-->
<script src="{{ asset('js/dataTables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/dataTables/dataTables.bootstrap.js') }}"></script>
<!-- SlimScroll-->
<script src="{{ asset('js/slimScroll/jquery.slimscroll.js') }}"></script>
<!-- FastClick-->
<script src="{{ asset('js/fastClick/fastclick.js') }}"></script>
<!-- API-->
<script src="{{ asset('js/api/api.js') }}"></script>
<!-- page script-->
<script type="text/javascript">

    $(function () {
        $("#example1").DataTable();
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false
        });
    });
</script>

</body>
</html>
