<div id="kt_app_sidebar" class="app-sidebar flex-column print-display-none" data-kt-drawer="true" data-kt-drawer-name="app-sidebar"
    data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px"
    data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="#" class="d-flex mt-3">
            <img alt="Logo" src="{{ asset('storage') . '/' . $commonDetails['logo'] }}"
                class="h-25px app-sidebar-logo-default">
            <img alt="Logo" src="{{ asset('storage') . '/' . $commonDetails['logo'] }}"
                class="h-20px app-sidebar-logo-minimize">
            {{-- <p class="fs-4 fw-bold ms-2 ls-3 text-white">PEPPLO<span class="fw-light">BD</span></p> --}}
        </a>
        <!--end::Logo image-->
        <!--begin::Sidebar toggle-->
        <!--begin::Minimized sidebar setup:
        if (isset($_COOKIE["sidebar_minimize_state"]) && $_COOKIE["sidebar_minimize_state"] === "on") {
            1. "src/js/layout/sidebar.js" adds "sidebar_minimize_state" cookie value to save the sidebar minimize state.
            2. Set data-kt-app-sidebar-minimize="on" attribute for body tag.
            3. Set data-kt-toggle-state="active" attribute to the toggle element with "kt_app_sidebar_toggle" id.
            4. Add "active" class to to sidebar toggle element with "kt_app_sidebar_toggle" id.
        }-->
        <div id="kt_app_sidebar_toggle"
            class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate "
            data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
            data-kt-toggle-name="app-sidebar-minimize">

            <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span
                    class="path2"></span></i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->

    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5"
            data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer"
            data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu"
                data-kt-menu="true" data-kt-menu-expand="false">
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.dashboard')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a href="{{ route('admin.dashboard') }}" class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-home-3 fs-2">
                                <i class="path1"></i>
                                <i class="path2"></i>
                            </i>
                        </span>
                        <span class="menu-title">Home</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Data Entry</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.products')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.products') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-bookmark fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Products</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                @hasanyrole('admin|sales_manager|super_admin')
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.customers')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.customers') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Customers</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                @endhasanyrole
                

                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Str::startsWith(request()->url(), route('admin.rentals')) ? 'here show' : '' }}">
                    <!--begin:Menu link-->
                    @php
                        $total = 0;
                        if(auth()->user()->can('approve rentals')){
                            $total += $pending_count;
                        }

                        if(auth()->user()->can('dispatch rentals')){
                            $total += $dispatch_count;
                        }

                        if(auth()->user()->can('accept returns')){
                            $total += $return_count;
                        }
                    @endphp
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-handcart fs-2">
                            </i>
                        </span>
                        <span class="menu-title">
                            Rentals
                            @if($total > 0)
                            <span class="ms-3 badge-sm badge badge-danger">{{ $total > 9 ? '9+' : $total  }}</span>
                            @endif
                        </span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        @can('create rentals')
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a href="{{ route('admin.rentals') }}" class="menu-link {{ request()->url() == route('admin.rentals') ? 'active' : '' }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Create Rentals</span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        @endcan

                        @can('approve rentals')
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a href="{{ route('admin.rentals.approve') }}" class="menu-link {{ Str::startsWith(request()->url(), route('admin.rentals.approve')) ? 'active' : '' }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">
                                    Approve Rentals
                                    @if($pending_count)
                                    <span class="ms-3 badge-sm badge badge-secondary">{{ $pending_count }}</span>
                                    @endif
                                </span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        @endcan
                        
                        @can('dispatch rentals')
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a href="{{ route('admin.rentals.dispatch') }}" class="menu-link {{ Str::startsWith(request()->url(), route('admin.rentals.dispatch')) ? 'active' : '' }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">
                                    Dispatch Orders
                                    @if($dispatch_count)
                                    <span class="ms-3 badge-sm badge badge-secondary">{{ $dispatch_count }}</span>
                                    @endif
                                </span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        @endcan
                        
                        @can('accept returns')
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a href="{{ route('admin.rentals.returns') }}" class="menu-link {{ Str::startsWith(request()->url(), route('admin.rentals.returns')) ? 'active' : '' }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">
                                    Accept Returns
                                    @if($return_count)
                                    <span class="ms-3 badge-sm badge badge-secondary">{{ $return_count }}</span>
                                    @endif
                                </span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        @endcan
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                @can('view theme')
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Themes</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.theme.create')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.theme.create') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-paintbucket fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">Create Themes</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.themes')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.themes') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-clipboard fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">Browse Themes</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                @endcan

                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Inspection</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-message-text-2 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">Reportings</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('admin.reporting.products') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Product Report</span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('admin.reporting.transactions') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Transaction Report</span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Due Report</span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Order Report</span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Invoice Report</span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                
                @hasanyrole('admin|sales_manager|super_admin')
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Website Management</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.pages')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.pages') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-switch fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Page Control</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-home-2 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Home Page</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('admin.banners') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Banners</span>
                            </a>
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                @endhasanyrole
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->

    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <form action="{{ route('admin.logout') }}" onclick="this.submit()" method="POST"
            class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100"
            data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click">
            @csrf
            <span class="btn-label">
                Logout
            </span>

            <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span
                    class="path2"></span></i>
        </form>
    </div>
    <!--end::Footer-->
</div>
