@include('customer.partials.header')

<!--begin::App-->
@section('app')
@show
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


        @include('customer.partials.head')
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            
            
            <!--begin::Sidebar-->
            @include('customer.partials.sidebar')
            <!--end::Sidebar-->


            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

                    <!--begin::Toolbar-->
                    @yield('toolbar')
                    <!--end::Toolbar-->

                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid ">

                        <!--begin::Content container-->
                        @yield('content')
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->

                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer print-display-none">
                    <!--begin::Footer container-->
                    <div
                        class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://pepplobd.com/" target="_blank"
                                class="text-gray-800 text-hover-primary">Pepplo BD Ltd</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://pepplobd.com/" target="_blank"
                                    class="menu-link px-2">About</a></li>

                            <li class="menu-item"><a href="https://beta.pepplobd.com/" target="_blank"
                                    class="menu-link px-2">Support</a></li>
                        </ul>
                        <!--end::Menu-->
                    </div>
                    <!--end::Footer container-->
                </div>
                <!--end::Footer-->
            </div>
            <!--end:::Main-->


        </div>
        <!--end::Wrapper-->


    </div>
    <!--end::Page-->
</div>

@yield('drawers')

@include('customer.partials.scrolltop')

@yield('exclusive_modals')

@include('customer.partials.footer')
