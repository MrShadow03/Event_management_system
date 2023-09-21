@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Company history</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Company history
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
                    <li class="breadcrumb-item text-muted">Company history</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#modal_new_banner"> New History </a>
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
                            @if ($company_histories->count())
                            @foreach ($company_histories as $company_history)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-60px symbol-2by3 me-4">
                                            <div class="symbol-label" style="background-image: url('{{ asset('storage') . '/' . $company_history->image }}')"></div>
                                        </div>
                                        <!--end::Avatar-->

                                        <!--begin::Name-->
                                        <div class="d-flex justify-content-start flex-column">
                                            <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $company_history->milestone }}</span>
                                            <span class="text-muted fw-semibold text-muted d-block w-300px fs-7 text-truncate">{{ $company_history->description }}</span>
                                        </div>
                                        <!--end::Name-->
                                    </div>
                                </td>
                                <td>
                                    <span class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ Carbon\Carbon::parse($company_history->date)->format('d F, Y') }}</span>
                                </td>
                                <td class="text-end">
                                    @if ($company_history->status)
                                        <span class="badge badge-light-success">Active</span>
                                    @else
                                        <span class="badge badge-light-warning">Inactive</span>
                                    @endif
                                </td>
                                <td class="text-end">
                                    <form class="form-check form-switch d-flex justify-content-end" title="Some info about it's function!" action="{{ route('admin.company-history.change-status', $company_history->id) }}" method="POST">
                                        @csrf
                                        @method('PATCH')
                                        <input class="form-check-input cursor-pointer h-20px w-30px" type="checkbox" role="switch" id="flexSwitchCheckChecked" @checked($company_history->status) onchange="this.form.submit()">
                                    </form>
                                </td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        title="Some info about it's function!" data-bs-toggle="modal"
                                        data-bs-target="#modal_update_banner" onclick="inputPageData({{ json_encode($company_history) }}, '{{ asset('storage') }}')">
                                        <i class="ki-duotone ki-pencil fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    <form class="d-inline me-1" action="{{ route('admin.company-history.destroy', $company_history->id) }}" method="POST">
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
                        action="{{ route('admin.company-history.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Add Milestone</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Milestone</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="First Project Completed" name="milestone" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->
                       
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Date</span>
                            </label>

                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-calendar fs-1">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                        <i class="path3"></i>
                                        <i class="path4"></i>
                                        <i class="path5"></i>
                                        <i class="path6"></i>
                                    </i>
                                </span>
                                <input type="date" name="date" class="form-control form-control-solid" />
                            </div>
                            <!--end::Label-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="3" name="description" placeholder="Enter event details here"></textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Event Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Image for the single company history section.">
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
                                    title="Change company history image">
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
                                    title="Cancel company history image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->
    
                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove company history image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->

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
                        action="{{ route('admin.company-history.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="editCompanyHistoryId">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Update Company history</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Milestone</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" id="editCompanyHistoryMilestone" placeholder="Best Website Ever" name="milestone" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Date</span>
                            </label>

                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-calendar fs-1">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                        <i class="path3"></i>
                                        <i class="path4"></i>
                                        <i class="path5"></i>
                                        <i class="path6"></i>
                                    </i>
                                </span>
                                <input type="date" id="editCompanyHistoryDate" name="date" class="form-control form-control-solid" />
                            </div>
                            <!--end::Label-->
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="3" id="editCompanyHistoryDescription" name="description"></textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Company history Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip" title="Image for the single company history section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-200px h-125px" id="editCompanyHistoryImage"></div>
                                    <!--end::Image preview wrapper-->
    
                                    <!--begin::Edit button-->
                                    <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="change"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Change company history image">
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
                                    title="Cancel company history image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->
    
                                    <!--begin::Remove button-->
                                    <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                    data-kt-image-input-action="remove"
                                    data-bs-toggle="tooltip"
                                    data-bs-dismiss="click"
                                    title="Remove company history image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->

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
                                <span>Company history Description</span>
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

<script>

    function inputPageData(data, storagePath){
        // change the form title
        $('#editCompanyHistoryId').val(data.id);
        $('#editCompanyHistoryMilestone').val(data.milestone);
        $('#editCompanyHistoryDate').val(data.date);
        $('#editCompanyHistoryDescription').val(data.description);
        $('#editCompanyHistoryImage').css('background-image', 'url('+ storagePath + '/' + data.image + ')');
    }
</script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
