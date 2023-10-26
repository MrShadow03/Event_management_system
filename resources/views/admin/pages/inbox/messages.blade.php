@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Inbox | Admin</title>
@endsection
<!--end::Page Title-->

<!--begin::Page Custom Styles(used by this page)-->
@section('exclusive_styles')
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <link href="{{ asset('assets/admin/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('assets/admin/assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet"
        type="text/css">
    <!--end::Vendor Stylesheets-->
    <style>
        .image-input-placeholder {
            background-image: url('{{ asset('assets/admin/assets/media/svg/avatars/blank.svg') }}');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{ asset('assets/admin/assets/media/svg/avatars/blank-dark.svg') }}');
        }

        iframe {
            width: 100% !important;
            height: 400px !important;
        }
    </style>
@endsection
<!--end::Page Custom Styles-->

<!--begin::toolbar-->
@section('toolbar')
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Inbox
                </h1>
                <!--end::Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.dashboard') }}" class="text-muted text-hover-primary">Home </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Inbox</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
@endsection
<!--end::toolbar-->

<!--begin::Main Content-->
@section('content')
    <!--begin::Content container-->
    <div id="kt_app_content_container" class="app-container  container-xxl ">
        <!--begin::Inbox App - Messages -->
        <div class="d-flex flex-column flex-lg-row">
            <!--begin::Sidebar-->
            <div class="d-none d-lg-flex flex-column flex-lg-row-auto w-100 w-lg-275px" data-kt-drawer="true"
                data-kt-drawer-name="inbox-aside" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_inbox_aside_toggle">

                <!--begin::sidebar-->
                @include('admin.pages.inbox.partials.sidebar')
                <!--end::sidebar-->
            </div>
            <!--end::Sidebar-->

            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-7 ms-xl-10">

                <!--begin::Card-->
                <div class="card">
                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                        <!--begin::Actions-->
                        <div class="d-flex flex-wrap gap-2">
                            <!--begin::Checkbox-->
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-4 me-lg-7">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_inbox_listing .form-check-input" value="1" />
                            </div>
                            <!--end::Checkbox-->

                            <!--begin::Reload-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary" onclick="window.location.reload();"
                                data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top" title="Reload">
                                <i class="ki-duotone ki-arrows-circle fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </a>
                            <!--end::Reload-->

                            <!--begin::Archive-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top"
                                title="Archive">
                                <i class="ki-duotone ki-sms fs-2"><span class="path1"></span><span
                                        class="path2"></span></i> </a>
                            <!--end::Archive-->

                            <!--begin::Filter-->
                            <div>
                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start">
                                    <i class="ki-duotone ki-down fs-2"></i> </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-kt-inbox-listing-filter="show_all">
                                            All
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="show_read">
                                            Read
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="show_unread">
                                            Unread
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="show_starred">
                                            Starred
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="show_unstarred">
                                            Unstarred
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </div>
                            <!--end::Filter-->

                            <!--begin::Sort-->
                            <span>
                                <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary"
                                    data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top"
                                    title="Sort">
                                    <i class="ki-duotone ki-dots-square fs-3 m-0"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span></i> </a>
                                <!--begin::Menu-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                    data-kt-menu="true">
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="filter_newest">
                                            Newest
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="filter_oldest">
                                            Oldest
                                        </a>
                                    </div>
                                    <!--end::Menu item-->

                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3"
                                            data-kt-inbox-listing-filter="filter_unread">
                                            Unread
                                        </a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu-->
                            </span>
                            <!--end::Sort-->
                        </div>
                        <!--end::Actions-->

                        <!--begin::Actions-->
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <!--begin::Search-->
                            <div class="d-flex align-items-center position-relative">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                        class="path1"></span><span class="path2"></span></i> <input type="text"
                                    data-kt-inbox-listing-filter="search"
                                    class="form-control form-control-sm form-control-solid mw-100 min-w-125px min-w-lg-150px min-w-xxl-200px ps-11"
                                    placeholder="Search inbox" />
                            </div>
                            <!--end::Search-->

                            <!--begin::Toggle-->
                            <a href="#"
                                class="btn btn-sm btn-icon btn-color-primary btn-light btn-active-light-primary d-lg-none"
                                data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-placement="top"
                                title="Toggle inbox menu" id="kt_inbox_aside_toggle">
                                <i class="ki-duotone ki-burger-menu-2 fs-3 m-0"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span><span class="path5"></span><span
                                        class="path6"></span><span class="path7"></span><span
                                        class="path8"></span><span class="path9"></span><span
                                        class="path10"></span></i> </a>
                            <!--end::Toggle-->
                        </div>
                        <!--end::Actions-->
                    </div>

                    <div class="card-body p-0">

                        <!--begin::Table-->
                        <table class="table table-hover table-row-dashed fs-6 gy-5 my-0" id="kt_inbox_listing">
                            <thead class="d-none">
                                <tr>
                                    <th>Checkbox</th>
                                    <th>Actions</th>
                                    <th>Author</th>
                                    <th>Title</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($messages as $message)
                                <tr>
                                    <td class="ps-9">
                                        <div class="form-check form-check-sm form-check-custom form-check-solid mt-3">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                        </div>
                                    </td>
                                    <td class="min-w-80px">
                                        <!--begin::Star-->
                                        <a href="{{ route('admin.inbox.message.important', $message->id) }}" class="btn btn-icon w-35px h-35px {{ $message->is_important ? 'btn-active-color-gray-400 btn-color-warning' : 'btn-color-gray-400 btn-active-color-warning' }}" data-bs-toggle="tooltip" data-bs-placement="right" title="{{ $message->is_important ? 'Remove important' : 'Mark as important' }}">
                                            <i class="ki-duotone ki-star fs-3"></i>
                                        </a>
                                        <!--end::Star-->
                                    </td>
                                    <td class="w-150px w-md-175px">
                                        <a href="{{ route('admin.inbox.message.reply', $message->id) }}" class="d-flex align-items-center text-dark">
                                            <!--begin::Avatar-->
                                            @php
                                                $bgClasses = ['primary', 'info', 'danger'];
                                                $randomBgClass = $bgClasses[array_rand($bgClasses)];
                                            @endphp
                                            <div class="symbol symbol-35px me-3">
                                                <div class="symbol-label bg-light-{{ $randomBgClass }}">
                                                    <span class="text-{{ $randomBgClass }}">{{ $message->name[0] }}</span>
                                                </div>
                                            </div>
                                            <!--end::Avatar-->
                                            
                                            <!--begin::Name-->
                                            <span class="{{ $message->is_unread ? 'fw-bold' : 'opacity-6' }}">{{ $message->name }}</span>
                                            <!--end::Name-->
                                        </a>
                                    </td>
                                    <td>
                                        <div class="text-dark gap-1 pt-2">
                                            <!--begin::Heading-->
                                            <a href="{{ route('admin.inbox.message.reply', $message->id) }}" class="text-dark">
                                                <span class="{{ $message->is_unread ? 'fw-bold' : 'opacity-6' }}">{{ $message->subject ?? '[No subject]' }}</span>
                                                <span class="fw-bold d-none d-md-inine"> - </span>
                                                <span class="d-none d-md-inine text-muted">{{ $message->message }}</span>
                                            </a>
                                            @php
                                                $isYougerthan72Hours = Carbon\Carbon::parse($message->created_at)->diffInHours() < 72;
                                                $isNew = $message->is_unread && $isYougerthan72Hours;
                                            @endphp
    
                                            @if ($isNew)
                                            <div class="badge badge-light-primary">new</div>
                                            @endif
                                            <!--end::Heading-->
                                        </div>

                                        <!--begin::Badges-->
                                        {{-- <div class="badge badge-light-primary">inbox</div>
                                        <div class="badge badge-light-warning">task</div> --}}
                                        <!--end::Badges-->
                                    </td>
                                    <td class="w-100px text-end fs-7 pe-9">
                                        <span class="fw-semibold text-muted cursor-pointer text-hover-underlined" data-bs-toggle="tooltip" data-bs-placement="right" title="{{ Carbon\Carbon::parse($message->created_at)->format('d M, Y | h:i A') }}">{{ Carbon\Carbon::parse($message->created_at)->format('d M') }}</span>
                                    </td>
                                </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                        <!--end::Table-->
                    </div>
                </div>
                <!--end::Card-->

            </div>
            <!--end::Content-->
        </div>
        <!--end::Inbox App - Messages -->




    </div>
    <!--end::Content container-->
@endsection
<!--end::Main Content-->
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
<script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('/assets/admin/assets/js/custom/apps/inbox/listing.js') }}"></script>
<script>
    var button = document.querySelector("#submit_button");

    // Handle button click event
    button.addEventListener("click", function() {
        // Activate indicator
        button.setAttribute("data-kt-indicator", "on");

        // Disable indicator after 3 seconds
        setTimeout(function() {
            button.removeAttribute("data-kt-indicator");
        }, 500);
    });
</script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
