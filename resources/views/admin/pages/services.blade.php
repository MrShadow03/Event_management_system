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
                {{-- <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#modal_new_banner"> New Service </a> --}}
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
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($services as $service)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Name-->
                                        <div class="d-flex justify-content-start flex-column" data-toggle="toggle">
                                            <span class="fw-bold text-primary mb-1 fs-6">[Slot-{{ $i }}]</span>
                                            <a href="#" class="text-gray-800 fw-bold mb-1 fs-6">Title: {{ $service->title }}</a>
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
                                    <span
                                    data-bs-toggle="tooltip" 
                                    data-bs-custom-class="fs-12" 
                                    data-bs-placement="top"
                                    data-bs-delay-show="500"
                                    title="Update Details"
                                    >
                                        <a 
                                        href="#" 
                                        class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                        onclick="inputPageData({{ json_encode($service) }}, '{{ asset('storage') }}')"
                                        data-bs-toggle="modal"
                                        data-bs-target="#modal_update_banner"
                                        >
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </span>
                                    <form action="{{ route('admin.service.add-image') }}" class="d-inline" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')
                                        <input type="hidden" name="id" value="{{ $service->id }}">
                                        <label 
                                            for="add-images{{ $service->id }}" 
                                            class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            title="Add Image"
                                            data-bs-toggle="tooltip" 
                                            data-bs-custom-class="tooltip-inverse" 
                                            data-bs-placement="right"
                                            data-bs-delay-show="500"
                                            title="Add Images"
                                        >
                                            <i class="ki-duotone ki-add-files fs-2" for="add-images">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                            </i>
    
                                            <input
                                                type="file"
                                                name="images[]"
                                                id="add-images{{ $service->id }}" 
                                                onChange="this.form.submit()"
                                                hidden
                                                multiple
                                                >
                                        </label>
                                    </form>
                                </td>
                            </tr>
                            {{-- full row for showing all the images --}}
                            <tr class="border-0 hide-child">
                                <td colspan="4" class="border-0">
                                    <div class="row row-gap-5">
                                        @foreach ($service->images as $image)
                                        <div class="col-md-2 col-sm-4 col-6">
                                            <div class="card">
                                                <img class="rounded object-fit-cover" height="100px" src="{{ asset('storage').'/'.$image->path }}" alt="service_image" class="img-fluid">
                                                <form class="mt-3" action="{{ route('admin.service.delete-image', $image->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button 
                                                    type="submit"
                                                    onclick="return confirm('Are you sure you want to delete this image?')"
                                                    class="btn btn-sm btn-outline btn-outline-dashed btn-outline-danger btn-active-light-danger d-block w-100"
                                                    data-bs-toggle="tooltip"
                                                    data-bs-placement="bottom"
                                                    data-bs-delay-show="1000"
                                                    title="Delete image"
                                                    >
                                                        <i class="fs-3 ki-solid ki-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </td>
                            </tr>
                            @php
                                $i++;
                            @endphp
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
                            <textarea class="form-control form-control-solid" rows="10" id="editServiceDescription" name="description" placeholder="Type Page Description"></textarea>
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
                            <textarea 
                                id="editFaqAnswer" 
                                class="form-control form-control-solid" 
                                placeholder="We build your dream!" 
                                name="description"
                                rows="10" 
                                required
                            >
                                {{ $sectionData->description }}
                            </textarea>
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
        let bullets = data.bullets.split('*');
        // change the form title
        $('#editServiceId').val(data.id);
        $('#editServiceTitle').val(data.title);
        $('#editServiceDescription').val(data.description);
    }
</script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
