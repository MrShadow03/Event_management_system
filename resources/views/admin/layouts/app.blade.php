@include('admin.partials.header')

<!--begin::App-->
@section('app')
@show
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">


        @include('admin.partials.head')
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            
            
            <!--begin::Sidebar-->
            @include('admin.partials.sidebar')
            <!--end::Sidebar-->


            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">

                    <!--begin::Toolbar-->
                    @section('toolbar')
                    @show
                    <!--end::Toolbar-->

                    <!--begin::Content-->
                    <div id="kt_app_content" class="app-content  flex-column-fluid ">

                        <!--begin::Content container-->
                        @section('content')
                        @show
                        <!--end::Content container-->
                    </div>
                    <!--end::Content-->
                </div>
                <!--end::Content wrapper-->

                <!--begin::Footer-->
                <div id="kt_app_footer" class="app-footer ">
                    <!--begin::Footer container-->
                    <div
                        class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted fw-semibold me-1">2023&copy;</span>
                            <a href="https://keenthemes.com/" target="_blank"
                                class="text-gray-800 text-hover-primary">Keenthemes</a>
                        </div>
                        <!--end::Copyright-->

                        <!--begin::Menu-->
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
                            <li class="menu-item"><a href="https://keenthemes.com/" target="_blank"
                                    class="menu-link px-2">About</a></li>

                            <li class="menu-item"><a href="https://devs.keenthemes.com/" target="_blank"
                                    class="menu-link px-2">Support</a></li>

                            <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank"
                                    class="menu-link px-2">Purchase</a></li>
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

@include('admin.partials.drawers')

@include('admin.partials.scrolltop')

{{-- @include('admin.layouts.modals') --}}
@yield('exclusive_modals')

@include('admin.partials.footer')
