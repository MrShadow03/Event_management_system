<div id="kt_app_sidebar" class="app-sidebar  flex-column " data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">

    <!--begin::Logo-->
    <div class="app-sidebar-logo px-6" id="kt_app_sidebar_logo">
        <!--begin::Logo image-->
        <a href="index-2.html" class="d-flex mt-3">
            <img alt="Logo" src="{{ asset('storage') . '/' . $commonDetails['logo'] }}" class="h-25px app-sidebar-logo-default">
            <img alt="Logo" src="{{ asset('storage') . '/' . $commonDetails['logo'] }}" class="h-20px app-sidebar-logo-minimize">
            <p class="fs-4 fw-bold ms-2 ls-3 text-white">PEPPLO<span class="fw-light">BD</span></p>
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
        <div id="kt_app_sidebar_toggle" class="app-sidebar-toggle btn btn-icon btn-shadow btn-sm btn-color-muted btn-active-color-primary body-bg h-30px w-30px position-absolute top-50 start-100 translate-middle rotate " data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="app-sidebar-minimize">

            <i class="ki-duotone ki-double-left fs-2 rotate-180"><span class="path1"></span><span class="path2"></span></i>
        </div>
        <!--end::Sidebar toggle-->
    </div>
    <!--end::Logo-->

    <!--begin::sidebar menu-->
    <div class="app-sidebar-menu overflow-hidden flex-column-fluid">
        <!--begin::Menu wrapper-->
        <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
            <!--begin::Menu-->
            <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
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
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.pages')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.pages') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-note-2 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Page Control</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Str::startsWith(request()->url(), route('admin.inbox.messages')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-sms fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Inbox</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--end:Menu link-->

                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('admin.inbox.messages') }}">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-dots-square fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Messages</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Str::startsWith(request()->url(), route('admin.workforces')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="#">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-faceid fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                                <span class="path6"></span>
                            </i>
                        </span>
                        <span class="menu-title">Employees</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <!--end:Menu link-->

                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('admin.workforces') }}">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-profile-user fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Manage Employees</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->

                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('admin.workforce.user', 60) }}">
                                <span class="menu-icon">
                                    <i class="ki-duotone ki-tablet-book  fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </span>
                                <span class="menu-title">Employee Details</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                
                <!--begin:Menu title-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content"><span class="menu-heading fw-bold text-uppercase fs-7">Sections</span></div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu title-->
                
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.banners')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.banners') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-toggle-on fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Banners</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.services')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.services') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-wrench fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Services</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.projects')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.projects') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-bookmark fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Projects</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.feedbacks')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.feedbacks') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-medal-star fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Feedbacks</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.workforces')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.workforces') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Employees</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.employees')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.employees') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-profile-user fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Team Members</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.faqs')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.faqs') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-message-question fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">FAQ</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                
                <!--begin:Menu item-->
                <div class="menu-item {{ Str::startsWith(request()->url(), route('admin.company-histories')) ? 'here' : '' }}">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="{{ route('admin.company-histories') }}">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-watch fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Company History</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->

                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-dots-square fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Single Sections</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->

                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="pages/user-profile/overview.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Overview</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::sidebar menu-->

    <!--begin::Footer-->
    <div class="app-sidebar-footer flex-column-auto pt-2 pb-6 px-6" id="kt_app_sidebar_footer">
        <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-flex flex-center btn-custom btn-primary overflow-hidden text-nowrap px-0 h-40px w-100" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">

            <span class="btn-label">
                Docs &amp; Components
            </span>

            <i class="ki-duotone ki-document btn-icon fs-2 m-0"><span class="path1"></span><span class="path2"></span></i> </a>
    </div>
    <!--end::Footer-->
</div>