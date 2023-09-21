@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Projects</title>
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
            background-image: url('{{ asset('assets/admin/assets/media/svg/avatars/blank.svg') }}');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{ asset('assets/admin/assets/media/svg/avatars/blank-dark.svg') }}');
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Projects
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
                    <li class="breadcrumb-item text-muted">Projects</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#modal_new_banner">New Project</a>
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
        <div class="row">
            <div class="col-xl-8 card mb-5 mb-xl-8">
    
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
                                @if ($projects->count())
                                    @foreach ($projects as $project)
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Avatar-->
                                                    <div class="symbol symbol-60px symbol-2by3 me-4">
                                                        <div class="symbol-label"
                                                            style="background-image: url('{{ asset('storage') . '/' . $project->image }}')">
                                                        </div>
                                                    </div>
                                                    <!--end::Avatar-->
    
                                                    <!--begin::Name-->
                                                    <div class="d-flex justify-content-start flex-column" data-toggle="toggle">
                                                        <a href="#"
                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">{{ $project->title }}</a>
                                                        <span
                                                            class="text-muted fw-semibold text-muted d-block w-100px fs-7 text-truncate">{{ $project->description }}</span>
                                                    </div>
                                                    <!--end::Name-->
                                                </div>
                                            </td>
                                            <td class="text-end">
                                                @if ($project->status)
                                                    <span class="badge badge-light-success">Active</span>
                                                @else
                                                    <span class="badge badge-light-warning">Inactive</span>
                                                @endif
                                            </td>
                                            <td class="text-end">
                                                <form class="form-check form-switch d-flex justify-content-end"
                                                    title="Some info about it's function!"
                                                    action="{{ route('admin.project.change-status', $project->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PATCH')
                                                    <input class="form-check-input cursor-pointer h-20px w-30px" type="checkbox"
                                                        role="switch" id="flexSwitchCheckChecked" @checked($project->status)
                                                        onchange="this.form.submit()">
                                                </form>
                                            </td>
                                            <td class="text-end">
                                                <a href="#"
                                                    class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                                    title="Some info about it's function!" data-bs-toggle="modal"
                                                    data-bs-target="#modal_update_banner"
                                                    onclick="inputProjectData({{ json_encode($project) }}, '{{ asset('storage') }}')">
                                                    <i class="ki-duotone ki-pencil fs-2">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                    </i>
                                                </a>
                                                <form class="d-inline me-1"
                                                    action="{{ route('admin.project.destroy', $project->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit"
                                                        class="btn btn-icon btn-bg-light bg-hover-light-danger btn-active-color-danger btn-sm me-1"
                                                        method="POST" title="Some info about it's function!"
                                                        onclick="return confirm('Do you want to delete this banner?')">
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
            <div class="col-xl-4">
                <!--begin::List Widget 4-->
                <div class="card card-xl-stretch mb-xl-8">
                    <!--begin::Header-->
                    <div class="card-header border-0 pt-5">
                        <h3 class="card-title align-items-start flex-column">
                            <span class="card-label fw-bold text-dark">Categories</span>
    
                            <span class="text-muted mt-1 fw-semibold fs-7">Add and remove categories</span>
                        </h3>
                        <div class="card-toolbar">
                            <a href="#" data-bs-toggle="modal" data-bs-target="#category_new_modal" class="btn btn-sm btn-light-primary">
                                <i class="ki-duotone ki-file fs-5">
                                    <span class="path1"></span>
                                    <span class="path2"></span>
                                </i> New
                            </a>
                        </div>
                    </div>
                    <!--end::Header-->
    
                    <!--begin::Body-->
                    <div class="card-body pt-5">
                        @foreach ($categories as $category)
                        <!--begin::Item-->
                        <div class="d-flex align-items-sm-center mb-7">
                            <!--begin::Symbol-->
                            <div class="symbol symbol-50px me-5">
                                <span class="symbol-label bg-light-danger">
                                    <i class="ki-duotone ki-note fs-2x text-danger">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                            </div>
                            <!--end::Symbol-->
    
                            <!--begin::Section-->
                            <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                                <div class="flex-grow-1 me-2">
                                    <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">{{  $category->name }}</a>
                                    <span class="text-muted fw-semibold d-block fs-7">{{  $category->project_count }} Project{{  $category->project_count > 1 ? 's' : '' }}</span>
                                </div>
                                <div class="my-2">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="Some info about it's function!" data-bs-toggle="modal" data-bs-target="#category_update_modal" onclick="inputCategoryData({{ json_encode($category) }})">
                                        <i class="ki-duotone ki-pencil fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                    @if (!($category->project_count || $category->id == 1))
                                    <form class="d-inline me-1"
                                        action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-bg-light bg-hover-light-danger btn-active-color-danger btn-sm me-1" title="Some info about it's function!" onclick="return confirm('Do you want to delete this Category?')">
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                    </form>
                                    @endif
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                        <!--end::Item-->
                        @endforeach
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::List Widget 4-->
            </div>
            <!--end::Row--> 
        </div>
    </div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
    <!--begin::Category new modal-->
    <div class="modal fade" id="category_new_modal" tabindex="-1" aria-hidden="true">
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
                        action="{{ route('admin.category.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h3 class="mb-3">New Category</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
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
                                <input type="text" name="name" class="form-control form-control-solid" placeholder="E.g Planning" />
                            </div>
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
    <!--end::Category new modal-->
    <!--begin::Category update modal-->
    <div class="modal fade" id="category_update_modal" tabindex="-1" aria-hidden="true">
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
                        action="{{ route('admin.category.update') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="editCategoryId">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h3 class="mb-3">Update Category</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
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
                                <input type="text" name="name" id="editCategoryName" class="form-control form-control-solid" placeholder="E.g Architechture" />
                            </div>
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
    <!--end::Category update modal-->
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
                        action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New Project</h1>
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

                            <input type="text" class="form-control form-control-solid" placeholder="Best Website Ever"
                                name="title" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="3" name="description"
                                placeholder="Type Page Description"></textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Repeater-->
                        <div id="create_project_bullets">
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
                                                    <input type="text" name=""
                                                        class="form-control form-control-solid"
                                                        placeholder="Add a bullet point" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mb-6">
                                                <a href="#" data-repeater-delete
                                                    class="btn btn-sm btn-light-danger">
                                                    <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span></i>
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
                        
                        <!--begin::Category Selection-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Category</label>
                            <div class="input-group input-group-solid">
                                <span class="input-group-text border-right">
                                    <i class="ki-duotone ki-notepad-bookmark fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </span>
                                <div class="overflow-hidden flex-grow-1">
                                    <select class="form-select form-select-solid rounded-start-0" name="category_id" data-control="select2" data-placeholder="Select a category">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected( $category->id == 1 )>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Category Selection-->

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Project Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Image for the single project section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-200px h-125px" style="background-image: url({{ asset('/assets/admin/assets/media/placeholder/banner.webp') }})">
                                    </div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change project image">
                                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                class="path2"></span></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Cancel project image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove project image">
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
                        action="{{ route('admin.project.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="editProjectId">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Update Project</h1>
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

                            <input type="text" class="form-control form-control-solid" id="editProjectTitle"
                                placeholder="Best Website Ever" name="title" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea class="form-control form-control-solid" rows="3" id="editProjectDescription" name="description"
                                placeholder="Type Page Description"></textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Repeater-->
                        <div id="update_project_bullets">
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
                                                    <input type="text" value="" name=""
                                                        class="bulletInput form-control form-control-solid"
                                                        placeholder="Add a bullet point" />
                                                </div>
                                            </div>
                                            <div class="col-sm-3 mb-6">
                                                <a href="#" data-repeater-delete
                                                    class="btn btn-sm btn-light-danger">
                                                    <i class="ki-duotone ki-trash fs-5"><span class="path1"></span><span
                                                            class="path2"></span><span class="path3"></span><span
                                                            class="path4"></span><span class="path5"></span></i>
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
                        <!--begin::Category Selection-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Category</label>
                            <div class="input-group input-group-solid flex-nowrap">
                                <span class="input-group-text">
                                    <i class="ki-duotone ki-notepad-bookmark fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </span>
                                <div class="overflow-hidden flex-grow-1">
                                    <select class="form-select form-select-solid rounded-start-0" name="category_id" id="editProjectCategory" data-control="select2" data-placeholder="Select a category">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Category Selection-->
                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Project Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Image for the single project section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-200px h-125px" id="editProjectImage"></div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change project image">
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
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Cancel project image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove project image">
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
                            <h3 class="mb-3" id="editModalTitle">Update Projects Section</h3>
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
                                <span>Project Description</span>
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
        function inputProjectData(data, storagePath) {
            let bullets = data.bullets.split('*');
            // change the form title
            $('#editProjectId').val(data.id);
            $('#editProjectTitle').val(data.title);
            $('#editProjectDescription').val(data.description);
            $('#editProjectCategory').val(data.category_id);

            // select the category in the select2
            $('#editProjectCategory').select2().trigger('change');

            // remove active class from all labels
            $('label').removeClass('active');
            $('#editProjectImage').css('background-image', 'url(' + storagePath + '/' + data.image + ')');

            // remove all the bullet points
            $('#update_project_bullets').find('[data-repeater-item]').remove();
            // Loop through bullet points and add them dynamically
            bullets.forEach(bullet => {
                if (bullet) {
                    // add the bullet to the form
                    $('#update_project_bullets').find('[data-repeater-create]').click();
                    $('#update_project_bullets').find('[data-repeater-item]:last-child').find('input').val(bullet);
                }
            });
        }

        function inputCategoryData(data) {
            // change the form title
            $('#editCategoryId').val(data.id);
            $('#editCategoryName').val(data.name);
        }

        $('#create_project_bullets').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });

        $('#update_project_bullets').repeater({
            initEmpty: false,

            defaultValues: {
                'text-input': 'foo'
            },

            show: function() {
                $(this).slideDown();
            },

            hide: function(deleteElement) {
                $(this).slideUp(deleteElement);
            }
        });
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
