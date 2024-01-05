@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Event Cards</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Event Cards
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
                    <li class="breadcrumb-item text-muted">Event-Cards</li>
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
@php
    function convertFileSize($sizeInKB = 0) {
        if ($sizeInKB < 1024) {
            return $sizeInKB . ' KB';
        } elseif ($sizeInKB < 1048576) {
            // Convert to MB
            $sizeInMB = $sizeInKB / 1024;
            return round($sizeInMB, 2) . ' MB';
        } elseif ($sizeInKB < 1073741824) {
            // Convert to GB
            $sizeInGB = $sizeInKB / 1048576;
            return round($sizeInGB, 2) . ' GB';
        }
    }
@endphp
<!--begin::Main Content-->
@section('content')
<div id="kt_app_content_container" class="app-container container-xxl">
    <div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('../../../assets/media/illustrations/sketchy-1/4.png')">
        <!--begin::Card header-->
        <div class="card-header pt-10">
            <div class="d-flex align-items-center">
                <!--begin::Icon-->
                <div class="symbol symbol-circle me-5">
                    <div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
                        <i class="ki-duotone ki-abstract-47 fs-2x text-primary"><span class="path1"></span><span class="path2"></span></i>                </div>
                </div>
                <!--end::Icon-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <h2 class="mb-1">File Manager</h2>
                    <div class="text-muted fw-bold">
                         {{ convertFileSize($documents->sum('size')) }}<span class="mx-3">|</span> {{ count($documents) }} item{{ count($documents) > 1 ? 's' : '' }}
                    </div> 
                </div>
                <!--end::Title-->
            </div>
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pb-0">

        </div>
        <!--end::Card body-->
    </div>
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header pt-8">
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-1 position-absolute ms-6"><span class="path1"></span><span class="path2"></span></i>    <input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Files & Folders" />
                </div>
                <!--end::Search--> 
            </div>
    
            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-flex btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal_update_banner">
                        <i class="ki-duotone ki-folder-up fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        Upload PDF
                    </button>
                    <!--end::Add customer--> 
                </div>
                <!--end::Toolbar-->
    
                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-filemanager-table-select="selected_count"></span> Selected
                    </div>
                
                    <button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->        
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
    
        <!--begin::Card body-->
        <div class="card-body">        
            <!--begin::Table-->
            <table id="kt_file_manager_list" data-kt-filemanager-table="files" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-250px">Name</th>
                        <th class="min-w-10px">Size</th>
                        <th class="min-w-125px">Last Modified</th>
                        <th class="w-125px"></th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach ($documents as $document)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <span class="icon-wrapper">
                                    <i class="fas fa-file-pdf fs-2x text-primary me-4"></i>
                                </span>
                                <a href="{{ asset('storage').'/'.$document->path }}" class="text-gray-800 text-hover-primary" download>{{ $document->name.'.'.$document->extension }}</a>
                                @if ($document->status)
                                <span class="badge badge-light-primary ms-3">Linked</span>
                                @endif
                            </div>
                        </td>
                        <td data-order="{{ $document->size }}">{{ convertFileSize($document->size) }}</td>
                        <td>
                            {{ $document->updated_at->format('d M Y, h:i a') }}
                        </td>
                        <td class="text-end" data-kt-filemanager-table="action_dropdown">
                            <div class="d-flex justify-content-end">
                                <!--begin::Share link-->
                                <div class="ms-2" data-kt-filemanger-table="copy_link">
                                    <form 
                                    action="{{ route('admin.document.change-status', $document->id) }}"  
                                    class="btn btn-sm btn-icon 
                                    {{ $document->status ? 'btn-light-danger' : 'btn-light-primary' }}"  
                                    method="POST"
                                    onclick="this.submit()"
                                    title="{{ $document->status ? 'Unlink' : 'Link to Website' }}"
                                    >
                                        @csrf
                                        @method('PATCH')

                                        @if ($document->status)    
                                        <i class="ki-duotone ki-disconnect fs-3 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                        @else
                                        <i class="ki-duotone ki-fasten fs-3 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        @endif
                                    </form>
                                </div>
                                <!--end::Share link-->

                                <!--begin::More-->
                                <div class="ms-2">
                                    <button 
                                    type="button"
                                    class="btn btn-sm btn-icon btn-light btn-active-light-primary" 
                                    data-kt-menu-trigger="click" 
                                    data-kt-menu-placement="bottom-end"
                                    >
                                        <i class="ki-duotone ki-dots-square fs-5 m-0">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                        </i>
                                    </button>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ asset('storage').'/'.$document->path }}" class="menu-link px-3">
                                            Download File
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a 
                                            href="javascript:void(0)" 
                                            class="menu-link px-3" 
                                            data-bs-toggle="modal"
                                            data-bs-target="#modal_rename_document"
                                            onclick="inputPageData({{ $document }})"
                                            >
                                            Rename
                                            </a>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <form 
                                            action="{{ route('admin.document.change-status', $document->id) }}" 
                                            class="menu-link px-3"
                                            method="POST"
                                            onclick="this.submit()"
                                            >
                                                @csrf
                                                @method('PATCH')
                                                {{ $document->status ? 'Unlink' : 'Link to Website' }}
                                            </form>
                                        </div>
                                        <!--end::Menu item-->

                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <form 
                                            action="{{ route('admin.document.destroy', $document->id) }}" 
                                            class="menu-link text-danger px-3 bg-hover-light-danger"
                                            method="POST"
                                            onclick="submitForm(this, event)" 
                                            >
                                                @csrf
                                                @method('DELETE')
                                                Delete
                                            </form>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </div>
                                <!--end::More-->
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
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
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.document.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" id="editModalTitle">Upload Document</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Name</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="Document name" name="name" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Document</span>
                            </label>
                            <!--end::Label-->

                            <input type="file" class="form-control form-control-solid" name="document" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                            <div class="form-text">Allowed File: .pdf | Max Size: 10MB</div>
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
    <!--begin::Page edit modal-->
    <div class="modal fade" id="modal_rename_document" tabindex="-1" aria-hidden="true">
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
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.document.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <!--begin::Heading-->
                        <input type="hidden" id="editIdInput" name="id">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" >Rename Document</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Name</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" id="editTitleInput" class="form-control form-control-solid" name="name" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
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
@endsection
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
<script src="{{ asset('./assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>

    <script>
        function inputPageData(data){
            document.getElementById('editIdInput').value = data.id;
            document.getElementById('editTitleInput').value = data.name;
        }

        function submitForm(form, event){
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!"
            }).then(function(result) {
                if (result.value) {
                    form.submit();
                }
            });
        }

        // Class definition
        var KTFileManagerList = function () {
        // Define shared variables
        var datatable;
        var table

        // Define template element variables
        var uploadTemplate;
        var renameTemplate;
        var actionTemplate;
        var checkboxTemplate;

        
        const initDatatable = () => {
            // Set date data order
            const tableRows = table.querySelectorAll('tbody tr');

            const filesListOptions = {
                "info": false,
                'order': [],
                'pageLength': 10,
                "lengthChange": false,
                'ordering': true,
                'columns': [
                    { data: 'name' },
                    { data: 'size' },
                    { data: 'date', orderable: false },
                    { data: 'action' },
                ],
                conditionalPaging: true
            };

            // Define datatable options to load
            var loadOptions;
            loadOptions = filesListOptions;

            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable(loadOptions);
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        const handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-kt-filemanager-table-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                datatable.search(e.target.value).draw();
            });
        }
        // Public methods
        return {
            init: function () {
                table = document.querySelector('#kt_file_manager_list');

                if (!table) {
                    return;
                }
                initDatatable();
                handleSearchDatatable();
                KTMenu.createInstances();
            }
        }
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTFileManagerList.init();
    });
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
