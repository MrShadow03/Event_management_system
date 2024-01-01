@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Service</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Services
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
                    <li class="breadcrumb-item text-muted">Services</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#modal_new_banner"> New Service </a>
                <a href="#" class="btn btn-sm btn-icon fw-bold btn-primary rotate-animation-90" data-bs-toggle="modal" data-bs-target="#modal_settings">
                    <i class="ki-solid ki-gear fs-3 "></i>
                </a>
                <!--end::Primary button-->
            </div>
            <!--end::Actions-->
        </div>
        <!--end::Toolbar container-->
    </div>
@endsection
<!--end::toolbar-->

<!--begin::Main Content-->
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">

        <!--begin::Row-->
        <div class="card mb-5 mb-xl-8">

            <!--begin::Body-->
            <div class="card-body pt-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4 m-0">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="border-0">
                                <th class="p-0 "></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-200px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-100px text-end"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            @if ($services->count())
                            @foreach ($services as $service)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-60px symbol-2by3 me-4">
                                            <div class="symbol-label" style="background-image: url('{{ asset('storage') . '/' . $service->image }}')"></div>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Name-->
                                        <div class="d-flex justify-content-start flex-column" data-toggle="toggle">
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $service->title }}</a>
                                            <span class="text-muted fw-semibold text-muted d-block w-300px fs-7 text-truncate">{{ $service->description }}</span>
                                        </div>
                                        <!--end::Name-->
                                    </div>
                                </td>
                                <td class="text-end">
                                    @if ($service->status)
                                        <span class="badge badge-light-success">Active</span>
                                    @else
                                        <span class="badge badge-light-warning">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <form class="form-check form-switch d-flex justify-content-end" title="Toggle status" action="{{ route('admin.service.change-status', $service->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input class="form-check-input cursor-pointer h-20px w-30px" type="checkbox" role="switch" id="flexSwitchCheckChecked" @checked($service->status) onchange="this.form.submit()">
                                    </form>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        title="Edit" data-bs-toggle="modal"
                                        data-bs-target="#modal_update_banner" onclick="inputPageData({{ json_encode($service) }}, '{{ asset('storage') }}')">
                                        <i class="ki-duotone ki-pencil fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <form class="d-inline me-1" action="{{ route('admin.service.destroy', $service->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-bg-light bg-hover-light-danger btn-active-color-danger btn-sm me-1" method="POST" title="Delete" onclick="return confirm('Do you want to delete this banner?')">
                                            @method('DELETE')
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <tbody>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <p class="fs-4 text-gray-600">No pages found!</p>
                                    </td>
                                </tr>
                            </tbody>
                            @endif
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Row-->
    </div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
    <!--begin::Page new modal-->
    <div class="modal fade" id="modal_new_banner" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.service.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New Service</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Title</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="Best Website Ever" name="title" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Type Page Description"></textarea>
                        </div>
                        <!--end::Input group-->
                        
                        <!--begin::Repeater-->
                        <div id="create_service_bullets">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="bullets">
                                    <div data-repeater-item>
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <div class="input-group input-group-solid">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ki-duotone ki-text-number fs-1">
                                                            <i class="path1"></i>
                                                            <i class="path2"></i>
                                                            <i class="path3"></i>
                                                            <i class="path4"></i>
                                                            <i class="path5"></i>
                                                            <i class="path6"></i>
                                                        </i>
                                                    </span>
                                                    <input type="text" name="" class="form-control form-control-solid" placeholder="Add a bullet point" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mb-6">
                                                <a href="#" data-repeater-delete class="btn btn-sm btn-light-danger">
                                                    <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group mt-4 mb-8">
                                <a href="javascript:;" data-repeater-create class="btn btn-sm btn-light-primary">
                                    <i class="ki-duotone ki-plus fs-3"></i>
                                    Add another
                                </a>
                            </div>
                            <!--end::Form group-->
                        </div>
                        <!--end::Repeater-->

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Service Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Image for the single service section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-200px h-125px" style="background-image: url({{ asset('/assets/admin/assets/media/placeholder/banner.webp') }})"></div>
                                    <!--end::Image preview wrapper-->
    
                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change service image">
                                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>
    
                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->
    
                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Cancel service image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->
    
                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove service image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->
                        <!--begin::Row-->
                        <div class="row mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                            <label class="fs-6 fw-semibold mb-4">Service Icon</label>
                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image active">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-1.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" checked value="service/service-1.png" name="icon"/>
                                        <div class="form-check-label">
                                            1
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-2.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="service/service-2.png" name="icon" id="text_wow"/>
                                        <div class="form-check-label">
                                            2
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-3.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="service/service-3.png" name="icon"/>
                                        <div class="form-check-label">
                                            3
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-4.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="service/service-4.png" name="icon"/>
                                        <div class="form-check-label">
                                            4
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-5.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="service/service-5.png" name="icon"/>
                                        <div class="form-check-label">
                                            5
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-6.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" value="service/service-6.png" name="icon"/>
                                        <div class="form-check-label">
                                            6
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">
                                Cancel
                            </button>

                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Page new modal-->
    <!--begin::Page edit modal-->
    <div class="modal fade" id="modal_update_banner" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.service.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="editServiceId">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Update Service</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Title</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" id="editServiceTitle" placeholder="Best Website Ever" name="title" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="3" id="editServiceDescription" name="description" placeholder="Type Page Description"></textarea>
                        </div>
                        <!--end::Input group-->
                        
                        <!--begin::Repeater-->
                        <div id="update_service_bullets">
                            <!--begin::Form group-->
                            <div class="form-group">
                                <div data-repeater-list="bullets">
                                    <div data-repeater-item>
                                        <div class="form-group row">
                                            <div class="col-sm-9">
                                                <div class="input-group input-group-solid">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <i class="ki-duotone ki-text-number fs-1">
                                                            <i class="path1"></i>
                                                            <i class="path2"></i>
                                                            <i class="path3"></i>
                                                            <i class="path4"></i>
                                                            <i class="path5"></i>
                                                            <i class="path6"></i>
                                                        </i>
                                                    </span>
                                                    <input type="text" value="" name="" class="bulletInput form-control form-control-solid" placeholder="Add a bullet point" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mb-6">
                                                <a href="#" data-repeater-delete class="btn btn-sm btn-light-danger">
                                                    <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>
                                                    Delete
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group mt-4 mb-8">
                                <a href="javascript:;" data-repeater-create class="btn btn-sm btn-light-primary">
                                    <i class="ki-duotone ki-plus fs-3"></i>
                                    Add another
                                </a>
                            </div>
                            <!--end::Form group-->
                        </div>
                        <!--end::Repeater-->

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Service Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Image for the single service section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-200px h-125px" id="editServiceImage"></div>
                                    <!--end::Image preview wrapper-->
    
                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change service image">
                                        <i class="ki-duotone ki-pencil fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->
    
                                    <!--begin::Cancel button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="cancel"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Cancel service image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->
    
                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove service image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->
                        <!--begin::Row-->
                        <div class="row mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                            <label class="fs-6 fw-semibold mb-4">Service Icon</label>
                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-1.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" id="editServiceIcon1" checked value="service/service-1.png" name="icon"/>
                                        <div class="form-check-label">
                                            1
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-2.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" id="editServiceIcon2" value="service/service-2.png" name="icon" id="text_wow"/>
                                        <div class="form-check-label">
                                            2
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-3.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" id="editServiceIcon3" value="service/service-3.png" name="icon"/>
                                        <div class="form-check-label">
                                            3
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-4.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" id="editServiceIcon4" value="service/service-4.png" name="icon"/>
                                        <div class="form-check-label">
                                            4
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-5.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" id="editServiceIcon5" value="service/service-5.png" name="icon"/>
                                        <div class="form-check-label">
                                            5
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->

                            <!--begin::Col-->
                            <div class="col-2">
                                <label class="form-check-image">
                                    <div class="form-check-wrapper p-2">
                                        <img src="{{ asset('storage/service/service-6.png') }}">
                                    </div>

                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" id="editServiceIcon6" value="service/service-6.png" name="icon"/>
                                        <div class="form-check-label">
                                            6
                                        </div>
                                    </div>
                                </label>
                            </div>
                            <!--end::Col-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">
                                Cancel
                            </button>

                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Page edit modal-->
    <!--begin::Settings modal-->
    <div class="modal fade" id="modal_settings" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.section.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <!--begin::Heading-->
                        <input type="hidden" id="editIdInput" name="id" value="{{ $sectionData->id }}">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" id="editModalTitle">Update Section</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Title</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the short title that will appear before heading.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="Section Title" value="{{ $sectionData->title }}" name="title" required>
                            <div class="fv-plugins-message-container invalid-faq"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Heading</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the main heading of the section">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="Section Heading" value="{{ $sectionData->heading }}" name="heading" required>
                            <div class="fv-plugins-message-container invalid-faq"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Service Description</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the short description for the section.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <textarea id="editFaqAnswer" class="form-control form-control-solid" placeholder="We build your dream!" name="description" required>{{ $sectionData->description }}</textarea>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">
                                Cancel
                            </button>

                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait...<span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end:Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Settings modal-->
@endsection
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')

<script src="{{ asset('/assets/admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
<script>

    function inputPageData(data, storagePath){
        let bullets = data.bullets.split('*');
        // change the form title
        $('#editServiceId').val(data.id);
        $('#editServiceTitle').val(data.title);
        $('#editServiceDescription').val(data.description);

        // remove active class from all labels
        $('label').removeClass('active');

        if(data.icon == 'service/service-1.png'){
            $('#editServiceIcon1').prop('checked', true);
            $('#editServiceIcon1').parent().parent().addClass('active');
        }else if(data.icon == 'service/service-2.png'){
            $('#editServiceIcon2').prop('checked', true);
            $('#editServiceIcon2').parent().parent().addClass('active');
        }else if(data.icon == 'service/service-3.png'){
            $('#editServiceIcon3').prop('checked', true);
            $('#editServiceIcon3').parent().parent().addClass('active');
        }else if(data.icon == 'service/service-4.png'){
            $('#editServiceIcon4').prop('checked', true);
            $('#editServiceIcon4').parent().parent().addClass('active');
        }else if(data.icon == 'service/service-5.png'){
            $('#editServiceIcon5').prop('checked', true);
            $('#editServiceIcon5').parent().parent().addClass('active');
        }else if(data.icon == 'service/service-6.png'){
            $('#editServiceIcon6').prop('checked', true);
            $('#editServiceIcon6').parent().parent().addClass('active');
        }
        $('#editServiceImage').css('background-image', 'url('+ storagePath + '/' + data.image + ')');
        $('#editVideoInput').val(data.video);

        // remove all the bullet points
        $('#update_service_bullets').find('[data-repeater-item]').remove();
        // Loop through bullet points and add them dynamically
        bullets.forEach(bullet => {
            if(bullet){
                // add the bullet to the form
                $('#update_service_bullets').find('[data-repeater-create]').click();
                $('#update_service_bullets').find('[data-repeater-item]:last-child').find('input').val(bullet);
            }
        });
    }

    $('#create_service_bullets').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function () {
            $(this).slideDown();
        },

        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });

    $('#update_service_bullets').repeater({
        initEmpty: false,

        defaultValues: {
            'text-input': 'foo'
        },

        show: function () {
            $(this).slideDown();
        },

        hide: function (deleteElement) {
            $(this).slideUp(deleteElement);
        }
    });
    
</script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
