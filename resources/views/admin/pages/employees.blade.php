@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Team Members</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Employees
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
                    <li class="breadcrumb-item text-muted">Employees</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#modal_new_employee">New Employee </a>
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
                            @if ($employees->count())
                            @foreach ($employees as $employee)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-60px me-4">
                                            <div class="symbol-label" style="background-image: url('{{ asset('storage') . '/' . $employee->image }}')"></div>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Name-->
                                        <div class="d-flex justify-content-start flex-column" data-toggle="toggle">
                                            <span class="text-gray-800 fw-bold mb-1 fs-6">{{ $employee->name }}</span>
                                            <span class="text-muted fw-semibold text-muted d-block w-300px fs-7">{{ $employee->designation }}</span>
                                            <a href="mailto:{{ $employee->email }}" class="text-muted fw-semibold text-hover-primary text-muted d-block w-300px fs-7 cursor-pointer">{{ $employee->email }}</a>
                                        </div>
                                        <!--end::Name-->
                                    </div>
                                </td>
                                <td>
                                    <a href="tel:+88{{ $employee->phone_number }}" class="text-gray-600 fw-semibold text-hover-primary text-muted d-block w-300px fs-12 cursor-pointer">{{ $employee->phone_number }}</a>
                                </td>
                                <td class="text-end">
                                    @if ($employee->status)
                                        <span class="badge badge-light-success">Active</span>
                                    @else
                                        <span class="badge badge-light-warning">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <form class="form-check form-switch d-flex justify-content-end" title="Some info about it's function!" action="{{ route('admin.employee.change-status', $employee->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input class="form-check-input cursor-pointer h-20px w-30px" type="checkbox" role="switch" id="flexSwitchCheckChecked" @checked($employee->status) onchange="this.form.submit()">
                                    </form>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        title="Some info about it's function!" data-bs-toggle="modal"
                                        data-bs-target="#modal_update_employee" onclick="inputPageData({{ json_encode($employee) }}, '{{ asset('storage') }}')">
                                        <i class="ki-duotone ki-pencil fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <form class="d-inline me-1" action="{{ route('admin.employee.destroy', $employee->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-bg-light bg-hover-light-danger btn-active-color-danger btn-sm me-1" method="POST" title="Some info about it's function!" onclick="return confirm('Do you want to delete this banner?')">
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
                                        <p class="fs-4 text-gray-600">No Members found!</p>
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
    <div class="modal fade" id="modal_new_employee" tabindex="-1" aria-hidden="true">
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
                        action="{{ route('admin.employee.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New Member</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Name</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" name="name" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Designation</label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="E.g: CEO" name="designation">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Phone number</label>
                                <div class="input-group input-group-solid">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                        </i>
                                    </span>
                                    <input type="text" name="phone_number" class="form-control form-control-solid" placeholder="01712345678" />
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-8">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Email</label>
                                <div class="input-group input-group-solid">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ki-duotone ki-sms fs-2">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                        </i>
                                    </span>
                                    <input type="email" name="email" class="form-control form-control-solid" placeholder="example@gmail.com" />
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin:: Social Media-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Social Media</label>
                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-facebook fs-2">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                    </i>
                                </span>
                                <input type="url" name="social_media" class="form-control form-control-solid" placeholder="https://www.facebook.com/employee-profile" />
                            </div>
                        </div>
                        <!--end:: Social Media-->

                        <!--begin::Image input-->
                        <div class="mb-10 fv-row">
                            <label class="fs-6 fw-semibold mb-4 d-block">
                                <span>Profile Photo</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Image for the single employee section.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper" style="background-image: url({{ asset('/assets/admin/assets/media/svg/avatars/blank.svg') }})"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Change employee image">
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
                                title="Cancel employee image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Remove employee image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                        </div>
                        <!--end::Image input-->

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
    <div class="modal fade" id="modal_update_employee" tabindex="-1" aria-hidden="true">
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
                        action="{{ route('admin.employee.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input id="editEmployeeId" type="hidden" name="id">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New Member</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Name</span>
                            </label>
                            <!--end::Label-->

                            <input id="editEmployeeName" type="text" class="form-control form-control-solid" name="name" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                        
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Designation</label>
                            <!--end::Label-->

                            <input id="editEmployeeDesignation" type="text" class="form-control form-control-solid" placeholder="E.g: CEO" name="designation">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Phone number</label>
                                <div class="input-group input-group-solid">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ki-duotone ki-address-book fs-2">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                            <i class="path3"></i>
                                        </i>
                                    </span>
                                    <input id="editEmployeePhoneNumber" type="text" name="phone_number" class="form-control form-control-solid" placeholder="01712345678" />
                                </div>
                            </div>
                            <div class="col-md-6 mt-md-0 mt-8">
                                <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Email</label>
                                <div class="input-group input-group-solid">
                                    <span class="input-group-text" id="basic-addon1">
                                        <i class="ki-duotone ki-sms fs-2">
                                            <i class="path1"></i>
                                            <i class="path2"></i>
                                        </i>
                                    </span>
                                    <input id="editEmployeeEmail" type="email" name="email" class="form-control form-control-solid" placeholder="example@gmail.com" />
                                </div>
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin:: Social Media-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Social Media</label>
                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-facebook fs-2">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                    </i>
                                </span>
                                <input id="editEmployeeSocialMedia" type="url" name="social_media" class="form-control form-control-solid" placeholder="https://www.facebook.com/employee-profile" />
                            </div>
                        </div>
                        <!--end:: Social Media-->

                        <!--begin::Image input-->
                        <div class="mb-10 fv-row">
                            <label class="fs-6 fw-semibold mb-4 d-block">
                                <span>Profile Photo</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Image for the single employee section.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <div class="image-input image-input-outline" data-kt-image-input="true">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper" id="editEmployeeImage" style="background-image: url({{ asset('/assets/admin/assets/media/svg/avatars/blank.svg') }})"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Change employee image">
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
                                title="Cancel employee image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Remove employee image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                        </div>
                        <!--end::Image input-->

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
                                    <span>Section Description</span>
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
        $('#editEmployeeId').val(data.id);
        $('#editEmployeeName').val(data.name);
        $('#editEmployeeDesignation').val(data.designation);
        $('#editEmployeePhoneNumber').val(data.phone_number);
        $('#editEmployeeEmail').val(data.email);
        $('#editEmployeeSocialMedia').val(data.social_media);
        $('#editEmployeeImage').css('background-image', 'url(' + storagePath + '/' + data.image + ')');
    }

    Inputmask({
        mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[.*{2,6}][.*{1,2}]",
        greedy: false,
        onBeforePaste: function (pastedValue, opts) {
            pastedValue = pastedValue.toLowerCase();
            return pastedValue.replace("mailto:", "");
        },
        definitions: {
            "*": {
                validator: '[0-9A-Za-z!#$%&"*+/=?^_`{|}~\-]',
                cardinality: 1,
                casing: "lower"
            }
        }
    }).mask("#kt_inputmask_8");
    
</script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
