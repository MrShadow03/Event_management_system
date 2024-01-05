@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-CMS(General Infp)</title>
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
        tbody.hide-child {
            display: none;
        }
        .show-child {
            display: table-row-group !important;
        }
        .image-input-placeholder {
            background-image: url('{{ asset("assets/admin/assets/media/svg/avatars/blank.svg") }}');
        }
        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{ asset("assets/admin/assets/media/svg/avatars/blank-dark.svg") }}');
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">General Info
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
                    <li class="breadcrumb-item text-muted">General Info</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <a 
                    href="#" 
                    class="btn btn-sm btn-icon fw-bold btn-primary" 
                    data-bs-toggle="tooltip" 
                    data-bs-custom-class="tooltip-inverse" 
                    data-bs-placement="top" 
                    title="View on website" 
                >
                    <i class="ki-duotone ki-exit-right-corner fs-3 ">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                </a>
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
@endsection
<!--end::toolbar-->

<!--begin::Main Content-->
@section('content')
    <div id="kt_app_content_container" class="app-container container-md">

        <!--begin::Row-->
        <div class="card mb-5 mb-xl-8">

            <!--begin::Body-->
            <div class="card-body pt-3">
                <!--begin:Form-->
                <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                action="{{ route('admin.section.update') }}" method="POST">
                @method('PATCH')
                @csrf
                <input type="hidden" name="id" value="{{ $section->id }}">
                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                    <!--begin::Label-->
                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                        <span class="required">Heading</span>
                    </label>
                    <!--end::Label-->

                    <input type="text" class="form-control form-control-solid fs-3" id="editServiceTitle" placeholder="Best Website Ever" name="heading" value="{{ $section->heading }}" required>
                    <div class="fv-plugins-message-container invalid-feedback"></div>
                </div>
                <!--end::Input group-->

                <!--begin::Input group-->
                <div class="d-flex flex-column mb-8">
                    <label class="fs-6 fw-semibold mb-2">Description</label>
                    <textarea class="form-control form-control-solid" rows="5" id="editServiceDescription" name="description" placeholder="Type Page Description">{{ $section->description }}</textarea>
                </div>
                <!--end::Input group-->

                <!--begin::Actions-->
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">
                        <i class="ki-duotone ki-devices-2 fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                        Save
                    </button>
                </div>
                <!--end::Actions-->
            </form>
            <!--end:Form-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Row-->
    </div>
@endsection
<!--end::Main Content-->
