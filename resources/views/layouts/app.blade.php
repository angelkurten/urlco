<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>URL.co</title>

    <meta name="description" content="Somos una alternativa diferente para que guardes tus URLs o marcadores y las compartas con tus amigos.">
    <meta name="author" content="Angel Kurten">
    <meta name="robots" content="noindex, nofollow">

    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <!--<link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">-->
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="{!! asset('dash/css/bootstrap.min.css') !!}">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="{!! asset('dash/css/plugins.css') !!}">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="{!! asset('dash/css/main.css') !!}">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="{!! asset('dash/css/themes.css') !!}">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
    <script src="{!! asset('dash/js/vendor/modernizr-2.7.1-respond-1.4.2.min.js') !!}"></script>

</head>
<body>
<!-- Page Wrapper -->
<!-- In the PHP version you can set the following options from inc/config file -->
<!--
    Available classes:

    'page-loading'      enables page preloader
-->
<div id="page-wrapper">
    <!-- Preloader -->
    <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
    <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
    <div class="preloader themed-background">
        <h1 class="push-top-bottom text-light text-center"><strong>URL</strong>.co</h1>
        <div class="inner">
            <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Cargando..</strong></h3>
            <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
        </div>
    </div>
    <!-- END Preloader -->

    <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">

        <!-- ALATERNATIVE SIDEBAR HERE -->

        <!-- Main Sidebar -->
        <div id="sidebar">
            <!-- Wrapper for scrolling functionality -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <!-- Brand -->
                    <a href="{!! route('home') !!}" class="sidebar-brand">
                        <i class="gi gi-flash"></i>
                        <span class="sidebar-nav-mini-hide"><strong>URL</strong>.co</span>
                    </a>
                    <!-- END Brand -->

                    <!-- User Info -->
                    <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                        <div class="sidebar-user-avatar">
                            <a href="{!! route('profile', Auth::user()->slug) !!}">
                                <img src="{!! Auth::user()->avatar !!}" alt="avatar">
                            </a>
                        </div>
                        <div class="sidebar-user-name">{{ Auth::user()->name }}</div>
                        <div class="sidebar-user-links">
                            <a href="{!! route('profile', Auth::user()->slug) !!}" data-toggle="tooltip" data-placement="bottom" title="Perfil"><i class="gi gi-user"></i></a>
                            <a href="/logout" data-toggle="tooltip" data-placement="bottom" title="Salir"><i class="gi gi-exit"></i></a>
                        </div>
                    </div>
                    <!-- END User Info -->

                    <!-- Sidebar Navigation -->
                    <ul class="sidebar-nav">
                        <li class="sidebar-header">
                            <span class="sidebar-header-title">Mis Carpetas</span>
                        </li>

                        @foreach(Auth::user()->folders as $folder)
                        <li>
                            <a href="{!! route('folder', $folder->slug) !!}"><i class="fa fa-folder"></i> <span class="sidebar-nav-mini-hide">{{ $folder->name }}</span></a>
                        </li>
                        @endforeach
                    </ul>
                    <!-- END Sidebar Navigation -->

                </div>
                <!-- END Sidebar Content -->
            </div>
            <!-- END Wrapper for scrolling functionality -->
        </div>
        <!-- END Main Sidebar -->

        <!-- Main Container -->
        <div id="main-container">
            <!-- Header -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available header.navbar classes:

                'navbar-default'            for the default light header
                'navbar-inverse'            for an alternative dark header

                'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                    'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                    'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
            -->
            <header class="navbar navbar-default">
                <!-- Left Header Navigation -->
                <ul class="nav navbar-nav-custom">
                    <!-- Main Sidebar Toggle Button -->
                    <li>
                        <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');">
                            <i class="fa fa-bars fa-fw"></i>
                        </a>
                    </li>
                    <!-- END Main Sidebar Toggle Button -->
                </ul>
                <!-- END Left Header Navigation -->

                <!-- Search Form -->
                <form action="#" method="post" class="navbar-form-custom" role="search">
                    <div class="form-group">
                        <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                    </div>
                </form>
                <!-- END Search Form -->

                <!-- Right Header Navigation -->
                <ul class="nav navbar-nav-custom pull-right">

                    <!-- User Dropdown -->
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{!! Auth::user()->avatar !!}" alt="avatar"> <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                            <li>
                                <a href="{!! route('profile', Auth::user()->slug) !!}">
                                    <i class="fa fa-user fa-fw pull-right"></i>
                                    Perfil
                                </a>
                                <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                <a href="#modal-user-settings" data-toggle="modal">
                                    <i class="fa fa-cog fa-fw pull-right"></i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END User Dropdown -->
                </ul>
                <!-- END Right Header Navigation -->
            </header>
            <!-- END Header -->

            <!-- Page content -->
            <div id="page-content">
                @yield('content')
            </div>
            <!-- END Page Content -->

            <!-- Footer -->
            <footer class="clearfix">
                <div class="pull-right">
                    Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                </div>
                <div class="pull-left">
                    <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.0</a>
                </div>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Main Container -->
    </div>
    <!-- END Page Container -->
</div>
<!-- END Page Wrapper -->

<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
<div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <form action="index.html" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered" onsubmit="return false;">
                    <fieldset>
                        <legend>Vital Info</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Username</label>
                            <div class="col-md-8">
                                <p class="form-control-static">Admin</p>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-email">Email</label>
                            <div class="col-md-8">
                                <input type="email" id="user-settings-email" name="user-settings-email" class="form-control" value="admin@example.com">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-notifications">Email Notifications</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary">
                                    <input type="checkbox" id="user-settings-notifications" name="user-settings-notifications" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Password Update</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                            <div class="col-md-8">
                                <input type="password" id="user-settings-password" name="user-settings-password" class="form-control" placeholder="Please choose a complex one..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New Password</label>
                            <div class="col-md-8">
                                <input type="password" id="user-settings-repassword" name="user-settings-repassword" class="form-control" placeholder="..and confirm it!">
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
<!-- END User Settings -->


<!-- Add URL Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
<div id="modal-url-add" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-link"></i> Nueva URL</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">
                <!-- Update Status Form -->
                {{ Form::open(['route' => 'new_url', 'id'=>'form-new-url', 'method' => 'post', 'class' => 'form-horizontal form-bordered']) }}
                <fieldset>
                    <div class="form-group">
                        <label class="col-md-3 control-label">URL</label>
                        <div class="col-md-9">
                            {{ Form::url('url', 'http://', ['class'=>'form-control push-bit', 'placeholder'=>"Url a guardar", 'id'=>'url'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Titulo</label>
                        <div class="col-md-9">
                            {{ Form::text('name', null, ['class'=>'form-control push-bit', 'placeholder'=>"Nombre de la url", 'id'=>'name'])}}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Descripcion</label>
                        <div class="col-md-9">
                            {{ Form::textarea('description', null, ['class'=>'form-control push-bit', 'placeholder'=>"Descripcion de la url", 'rows'=>2]) }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Categorias</label>
                        <div class="col-md-9">
                            {{ Form::text('categories', null, ['class'=>'input-tags', 'placeholder'=>"Categorias", 'id'=>'categories'])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Carpetas</label>
                        <div class="col-md-9">
                            {{ Form::select('folders[]', $folders, null, ['class'=>'form-control select-chosen', 'multiple'=>'true', 'data-placeholder' => 'Selecciona las carpetas']) }}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Nueva Carpeta?</label>
                        <div class="col-md-9">
                            <label class="switch switch-info"><input type="checkbox" name="new_folder_c" id="new_folder"><span></span></label>
                        </div>
                    </div>

                    <div class="form-group display-none" id="nfd">
                        <label class="col-md-3 control-label">Nombre de la Carpeta</label>
                        <div class="col-md-9">
                            {{ Form::text('new_folder', null, ['class'=>'form-control push-bit', 'placeholder'=>"Nombre de la Carpeta"])}}
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Privacidad</label>
                        <div class="col-md-9">
                            {{ Form::select('privacy', ['public'=>'Publico', 'privacy'=>'Privado'], 'public',['class'=>'form-control', 'placeholder'=>"holder"])}}
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-sm btn-primary">Guardar</button>
                        </div>
                    </div>
                </fieldset>
                {{ Form::close() }}
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
<!-- END User Settings -->

<!-- Include Jquery library from Google's CDN but if something goes wrong get Jquery from local file (Remove 'http:' if you have SSL) -->
<script src="{!! asset('dash/js/vendor/jquery-1.11.1.min.js') !!}"></script>
<script>!window.jQuery && document.write(decodeURI('%3Cscript src="{!! asset('dash/js/vendor/jquery-1.11.1.min.js') !!}"%3E%3C/script%3E'));</script>

<!-- Bootstrap.js, Jquery plugins and Custom JS code -->
<script src="{!! asset('dash/js/vendor/bootstrap.min.js') !!}"></script>
<script src="{!! asset('dash/js/plugins.js') !!}"></script>
<script src="{!! asset('dash/js/app.js') !!}"></script>

@yield('scripts')
</body>
</html>