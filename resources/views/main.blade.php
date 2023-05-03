<!DOCTYPE html>
<html lang="en">
    <head>
        <title>HEALTY BITES</title>
        <meta charset="utf-8" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Craft admin dashboard live demo. Check out all the features of the admin panel. A large number of settings, additional services and widgets." />
        <meta name="keywords" content="Craft, bootstrap, bootstrap 5, admin themes, dark mode, free admin themes, bootstrap admin, bootstrap dashboard" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="shortcut icon" href="{{asset('assets/plugin_tenp/logo.svg')}}" />
    
        <!--begin::Fonts(mandatory for all pages)-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
        <!--end::Fonts-->
    
        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
        <link href="{{asset('assets/plugin_tenp/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/plugin_tenp/style.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/costum/config.css')}}" rel="stylesheet" type="text/css" />
        <!--end::Global Stylesheets Bundle-->

        <!--begin::Global Javascript Bundle(mandatory for all pages)-->
        <script src="{{asset('assets/sweetalert/sweetalert2.all.min.js')}} "></script>
        <script src="{{asset('assets/plugin_tenp/plugins.bundle.js')}}"></script>
        <script src="{{asset('assets/plugin_tenp/scripts.bundle.js')}}"></script>
        <!--end::Global Javascript Bundle-->

        @include('Template.Head')
        
        <script>
            var defaultThemeMode = "light";
            var themeMode;
    
            if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                    themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                    if (localStorage.getItem("data-bs-theme") !== null) {
                        themeMode = localStorage.getItem("data-bs-theme");
                    } else {
                        themeMode = defaultThemeMode;
                    }
                }
    
                if (themeMode === "system") {
                    themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
    
                document.documentElement.setAttribute("data-bs-theme", themeMode);
            }
    
        </script>
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
        </script>
        <script>
            var delay = 500;
            $(window).on('load', function() {
                setTimeout(function(){
                    $('[data-search-table="search"]').val('');
                    $(".preloader").hide();
                },delay);
            });
        </script>
        <!--end::Theme mode setup on page load-->
    </head>
    <!--end::Head-->

    <body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-fixed aside-default-enabled">
    <div class="preload-wrapper preloader">
            <div id="preloader_3"></div>
        </div>
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root">
            <!--begin::Page-->
            <div class="page d-flex flex-row flex-column-fluid">
                @include('Template.Sidebar')

                <!--begin::Wrapper-->
                <div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    @include('Template.Header')
                    <!--begin::Content-->
                    <div class="content fs-6 d-flex flex-column flex-column-fluid" id="kt_content">
                        @yield('content')
                    </div>
                    <!--end::Content-->
                    <!--begin::Footer-->
                    <div class="footer py-4 d-flex flex-lg-column " id="kt_footer">
                        <!--begin::Container-->
                        <div class=" container-fluid  d-flex flex-column flex-md-row flex-stack">
                            <!--begin::Copyright-->
                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted fw-semibold me-2">{{date('Y');}}&copy;</span>
                                <a href="" target="_blank" class="text-gray-800 text-hover-primary">KGDR</a>
                            </div>
                            <!--end::Copyright-->

                            <!--begin::Menu-->
                            <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                                <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">About</a></li>
                                <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">Support</a></li>
                                <li class="menu-item"><a href="" target="_blank" class="menu-link px-2">Purchase</a></li>
                            </ul>
                            <!--end::Menu-->
                        </div>
                        <!--end::Container-->
                    </div>
                    <!--end::Footer-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::page-->
        </div>
    </body>
</html>