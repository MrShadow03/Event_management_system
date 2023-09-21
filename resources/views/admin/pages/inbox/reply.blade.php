@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Banners</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Message
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
                    <li class="breadcrumb-item text-muted">Message</li>
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
    <!--begin::Inbox App - View & Reply -->
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
                <div class="card-header align-items-center py-5 gap-5">
                    <!--begin::Actions-->
                    <div class="d-flex">
                        <!--begin::Back-->
                        <a href="{{ route('admin.inbox.messages') }}" class="btn btn-sm btn-icon btn-clear btn-active-light-primary me-3"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Back">
                            <i class="ki-duotone ki-arrow-left fs-1 m-0"><span class="path1"></span><span
                                    class="path2"></span></i> </a>
                        <!--end::Back-->

                        <!--begin::Archive-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Archive">
                            <i class="ki-duotone ki-archive fs-2 m-0"><span class="path1"></span><span class="path2"></span></i> </a>
                        <!--end::Archive-->
                    </div>
                    <!--end::Actions-->

                    <!--begin::Pagination-->
                    <div class="d-flex align-items-center">
                        <!--begin::Pages info-->
                        <span class="fw-semibold text-muted me-2">1 - 50 of 235</span>
                        <!--end::Pages info-->

                        <!--begin::Prev page-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-3"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Previous message">
                            <i class="ki-duotone ki-left fs-2 m-0"></i> </a>
                        <!--end::Prev page-->

                        <!--begin::Next page-->
                        <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                            data-bs-toggle="tooltip" data-bs-placement="top" title="Next message">
                            <i class="ki-duotone ki-right fs-2 m-0"></i> </a>
                        <!--end::Next page-->

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
                    <!--end::Pagination-->
                </div>

                <div class="card-body">
                    <!--begin::Title-->
                    <div class="d-flex flex-wrap gap-2 justify-content-between mb-8">
                        <div class="d-flex align-items-center flex-wrap gap-2">
                            <!--begin::Heading-->
                            <h2 class="fw-semibold me-3 my-1">{{ $message->subject ?? '[No Subject]' }}</h2>
                            <!--begin::Heading-->

                            <!--begin::Badges-->
                            @php
                                $is_recent = Carbon\Carbon::parse($message->created_at)->diffInHours() < 48;
                            @endphp
                            @if ($is_recent)
                            <span class="badge badge-light-primary my-1 me-2">recent</span>
                            @endif
                            @if ($message->is_important)
                            <span class="badge badge-light-warning my-1 me-2">important</span>
                            @endif
                            <!--end::Badges-->
                        </div>

                        <div class="d-flex">
                            <!--begin::Sort-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Sort">
                                <i class="ki-duotone ki-arrow-up-down fs-2 m-0"><span class="path1"></span><span
                                        class="path2"></span></i> </a>
                            <!--end::Sort-->

                            <!--begin::Print-->
                            <a href="#" class="btn btn-sm btn-icon btn-light btn-active-light-primary me-2"
                                data-bs-toggle="tooltip" data-bs-placement="top" title="Print">
                                <i class="ki-duotone ki-printer fs-2"><span class="path1"></span><span
                                        class="path2"></span><span class="path3"></span><span
                                        class="path4"></span><span class="path5"></span></i> </a>
                            <!--end::Print-->
                        </div>
                    </div>
                    <!--end::Title-->

                    <!--begin::Message accordion-->
                    <div data-kt-inbox-message="message_wrapper">
                        <!--begin::Message header-->
                        <div class="d-flex flex-wrap gap-2 flex-stack cursor-pointer" data-kt-inbox-message="header">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center">
                                <!--begin::Avatar-->
                                <div class="symbol symbol-50px me-3">
                                    <div class="symbol-label bg-light-info">
                                        <span class="text-info fw-bold fs-3">{{ $message->name[0] }}</span>
                                    </div>
                                </div>
                                <!--end::Avatar-->

                                <div class="pe-5">
                                    <!--begin::Author details-->
                                    <div class="d-flex align-items-center flex-wrap gap-1">
                                        <a href="#" class="fw-bold text-dark text-hover-primary">{{ $message->name }}</a>
                                        <i class="ki-duotone ki-abstract-8 fs-7 text-success mx-3"><span
                                                class="path1"></span><span class="path2"></span></i> <span
                                            class="text-muted fw-bold">{{ Carbon\Carbon::parse($message->created_at)->diffForHumans() }}</span>
                                    </div>
                                    <!--end::Author details-->

                                    <!--begin::Message details-->
                                    <div data-kt-inbox-message="details">
                                        <span class="text-muted fw-semibold">to me</span>

                                        <!--begin::Menu toggle-->
                                        <a href="#" class="me-1" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="bottom-start">
                                            <i class="ki-duotone ki-down fs-5 m-0"></i> </a>
                                        <!--end::Menu toggle-->

                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-300px p-4"
                                            data-kt-menu="true">
                                            <!--begin::Table-->
                                            <table class="table mb-0">
                                                <tbody>
                                                    <tr>
                                                        <td class="w-75px text-muted">From</td>
                                                        <td>{{ $message->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Date</td>
                                                        <td>{{ Carbon\Carbon::parse($message->created_at)->format('d M, Y | h:i A') }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Subject</td>
                                                        <td>{{ $message->subject ?? '[No Subject]' }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="text-muted">Reply-to</td>
                                                        <td>{{ $message->email }}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Message details-->
                                </div>
                            </div>
                            <!--end::Author-->

                            <!--begin::Actions-->
                            <div class="d-flex align-items-center flex-wrap gap-2">
                                <!--begin::Date-->
                                <span class="fw-semibold text-muted text-end me-3">{{ Carbon\Carbon::parse($message->created_at)->format('d M, Y | h:i A') }}</span>
                                <!--end::Date-->

                                <div class="d-flex">
                                    <!--begin::Important-->
                                    <!--begin::Star-->
                                    <a href="{{ route('admin.inbox.message.important', $message->id) }}" class="btn btn-icon w-35px h-35px {{ $message->is_important ? 'btn-active-color-gray-400 btn-color-warning' : 'btn-color-gray-400 btn-active-color-warning' }}" data-bs-toggle="tooltip" data-bs-placement="right" title="{{ $message->is_important ? 'Remove important' : 'Mark as important' }}">
                                        <i class="ki-duotone ki-star fs-3"></i>
                                    </a>
                                    <!--end::Star-->
                                </div>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Message header-->

                        <!--begin::Message content-->
                        <div class="collapse fade show" data-kt-inbox-message="message">
                            <div class="py-5">
                                <p>{!! nl2br(e($message->message)) !!}</p>
                            </div>
                        </div>
                        <!--end::Message content-->
                    </div>
                    <!--end::Message accordion-->
                    <!--begin::Form-->
                    <form id="kt_inbox_reply_form" class="d-none rounded border mt-10">
                        <!--begin::Body-->
                        <div class="d-block">
                            <!--begin::To-->
                            <div class="d-flex align-items-center border-bottom px-8 min-h-50px">
                                <!--begin::Label-->
                                <div class="text-dark fw-bold w-75px">
                                    To:
                                </div>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control border-0" name="compose_to"
                                    value="e.smith@kpmg.com.au, max@kt.com, sean@dellito.com"
                                    data-kt-inbox-form="tagify">
                                <!--end::Input-->

                                <!--begin::CC & BCC buttons-->
                                <div class="ms-auto w-75px text-end">
                                    <span class="text-muted fs-bold cursor-pointer text-hover-primary me-2"
                                        data-kt-inbox-form="cc_button">Cc</span>
                                    <span class="text-muted fs-bold cursor-pointer text-hover-primary"
                                        data-kt-inbox-form="bcc_button">Bcc</span>
                                </div>
                                <!--end::CC & BCC buttons-->
                            </div>
                            <!--end::To-->

                            <!--begin::CC-->
                            <div class="d-none align-items-center border-bottom ps-8 pe-5 min-h-50px"
                                data-kt-inbox-form="cc">
                                <!--begin::Label-->
                                <div class="text-dark fw-bold w-75px">
                                    Cc:
                                </div>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control border-0" name="compose_cc" value=""
                                    data-kt-inbox-form="tagify">
                                <!--end::Input-->

                                <!--begin::Close-->
                                <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="cc_close">
                                    <i class="ki-duotone ki-cross fs-5"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Close-->
                            </div>
                            <!--end::CC-->

                            <!--begin::BCC-->
                            <div class="d-none align-items-center border-bottom inbox-to-bcc ps-8 pe-5 min-h-50px"
                                data-kt-inbox-form="bcc">
                                <!--begin::Label-->
                                <div class="text-dark fw-bold w-75px">
                                    Bcc:
                                </div>
                                <!--end::Label-->

                                <!--begin::Input-->
                                <input type="text" class="form-control border-0" name="compose_bcc"
                                    value="" data-kt-inbox-form="tagify">
                                <!--end::Input-->

                                <!--begin::Close-->
                                <span class="btn btn-clean btn-xs btn-icon" data-kt-inbox-form="bcc_close">
                                    <i class="ki-duotone ki-cross fs-5"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Close-->
                            </div>
                            <!--end::BCC-->

                            <!--begin::Subject-->
                            <div class="border-bottom">
                                <input class="form-control border-0 px-8 min-h-45px" name="compose_subject"
                                    placeholder="Subject">
                            </div>
                            <!--end::Subject-->

                            <!--begin::Message-->
                            <div id="inbox_form_editor" class="border-0 h-250px px-3">
                            </div>
                            <!--end::Message-->

                            <!--begin::Attachments-->
                            <div class="dropzone dropzone-queue px-8 py-4" id="kt_inbox_reply_attachments"
                                data-kt-inbox-form="dropzone">
                                <div class="dropzone-items">
                                    <div class="dropzone-item" style="display:none">
                                        <!--begin::Dropzone filename-->
                                        <div class="dropzone-file">
                                            <div class="dropzone-filename" title="some_image_file_name.jpg">
                                                <span data-dz-name="">some_image_file_name.jpg</span> <strong>(<span
                                                        data-dz-size="">340kb</span>)</strong>
                                            </div>
                                            <div class="dropzone-error" data-dz-errormessage=""></div>
                                        </div>
                                        <!--end::Dropzone filename-->

                                        <!--begin::Dropzone progress-->
                                        <div class="dropzone-progress">
                                            <div class="progress">
                                                <div class="progress-bar bg-primary" role="progressbar"
                                                    aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"
                                                    data-dz-uploadprogress=""></div>
                                            </div>
                                        </div>
                                        <!--end::Dropzone progress-->

                                        <!--begin::Dropzone toolbar-->
                                        <div class="dropzone-toolbar">
                                            <span class="dropzone-delete" data-dz-remove="">
                                                <i class="ki-duotone ki-cross fs-6"><span class="path1"></span><span
                                                        class="path2"></span></i> </span>
                                        </div>
                                        <!--end::Dropzone toolbar-->
                                    </div>
                                </div>
                            </div>
                            <!--end::Attachments-->
                        </div>
                        <!--end::Body-->

                        <!--begin::Footer-->
                        <div class="d-flex flex-stack flex-wrap gap-2 py-5 ps-8 pe-5 border-top">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center me-3">
                                <!--begin::Send-->
                                <div class="btn-group me-4">
                                    <!--begin::Submit-->
                                    <span class="btn btn-primary fs-bold px-6" data-kt-inbox-form="send">
                                        <span class="indicator-label">
                                            Send
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span
                                                class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </span>
                                    <!--end::Submit-->

                                    <!--begin::Send options-->
                                    <span class="btn btn-primary btn-icon fs-bold" role="button">
                                        <span class="btn btn-icon" data-kt-menu-trigger="click"
                                            data-kt-menu-placement="top-start">
                                            <i class="ki-duotone ki-down fs-2 m-0"></i> </span>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Schedule send
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Save &amp; archive
                                                </a>
                                            </div>
                                            <!--end::Menu item-->

                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">
                                                    Cancel
                                                </a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu-->
                                    </span>
                                    <!--end::Send options-->
                                </div>
                                <!--end::Send-->

                                <!--begin::Upload attachement-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2"
                                    id="kt_inbox_reply_attachments_select" data-kt-inbox-form="dropzone_upload">
                                    <i class="ki-duotone ki-paper-clip fs-2 m-0"></i> </span>
                                <!--end::Upload attachement-->

                                <!--begin::Pin-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary">
                                    <i class="ki-duotone ki-geolocation fs-2 m-0"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::Pin-->
                            </div>
                            <!--end::Actions-->

                            <!--begin::Toolbar-->
                            <div class="d-flex align-items-center">
                                <!--begin::More actions-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary me-2"
                                    data-toggle="tooltip" title="More actions">
                                    <i class="ki-duotone ki-setting-2 fs-2"><span class="path1"></span><span
                                            class="path2"></span></i> </span>
                                <!--end::More actions-->

                                <!--begin::Dismiss reply-->
                                <span class="btn btn-icon btn-sm btn-clean btn-active-light-primary"
                                    data-inbox="dismiss" data-toggle="tooltip" title="Dismiss reply">
                                    <i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span
                                            class="path2"></span><span class="path3"></span><span
                                            class="path4"></span><span class="path5"></span></i> </span>
                                <!--end::Dismiss reply-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Footer-->
                    </form>
                    <!--end::Form-->
                </div>
            </div>
            <!--end::Card-->

        </div>
        <!--end::Content-->
    </div>
    <!--end::Inbox App - View & Reply -->
</div>
<!--end::Content container-->
@endsection
<!--end::Main Content-->
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('assets/admin/assets/js/custom/apps/inbox/reply.js') }}"></script>
    <script>
        // var quill = new Quill('#inbox_form_editor', {
        //     modules: {
        //         toolbar: [
        //             [{
        //                 header: [1, 2, false]
        //             }],
        //             ['bold', 'italic', 'underline'],
        //             ['image', 'code-block']
        //         ]
        //     },
        //     placeholder: 'Type your text here...',
        //     name : 'message',
        //     theme: 'snow' // or 'bubble'
        // });

        // setInterval(() => {
        //     var quillContent = quill.root.innerHTML; // This is the issue
        //     console.dir(quillContent);
        // }, 1000);`  
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
