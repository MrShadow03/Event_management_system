@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Theme Builder | Admin</title>
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
<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container  container-xxl d-flex flex-stack ">

        <!--begin::Page title-->
        <div data-kt-swapper="true" data-kt-swapper-mode="{default: 'prepend', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_content_container', lg: '#kt_app_toolbar_container'}" class="page-title d-flex flex-column justify-content-center flex-wrap me-3 mb-5 mb-lg-0">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Theme Builder</h1>
            <!--end::Title-->

            <!--begin::Breadcrumb-->
            <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="../index-2.html" class="text-muted text-hover-primary">Home </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->

                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Toolbars</li>
                <!--end::Item-->
            </ul>
            <!--end::Breadcrumb-->
        </div>
        <!--end::Page title-->
        <!--begin::Action group-->
        <div class="d-flex align-items-center gap-2">
            <!--begin::Action wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Label-->
                <span class="fs-7 fw-bold text-gray-700 pe-4 text-nowrap d-none d-md-block">Sort By:</span>
                <!--end::Label-->

                <!--begin::Select-->
                <select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px" data-control="select2" data-placeholder="Latest" data-hide-search="true">
                    <option value></option>
                    <option value="1" selected>Latest</option>
                    <option value="2">In Progress</option>
                    <option value="3">Done</option>
                </select>
                <!--end::Select-->
            </div>
            <!--end::Action wrapper-->

            <!--begin::Action wrapper-->
            <div class="d-flex align-items-center">
                <!--begin::Label-->
                <span class="fs-7 text-gray-700 fw-bold pe-3 d-none d-md-block">Quick Tools:</span>
                <!--end::Label-->

                <!--begin::Actions-->
                <div class="d-flex">
                    <!--begin::Action-->
                    <a href="#"
                        class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-success"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-placement="top"
                        title="Add new page">
                        <i class="ki-duotone ki-file fs-2qx">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                    <!--end::Action-->

                    <!--begin::Action-->
                    <a href="#"
                        class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-success"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-placement="top"
                        title="Add new category">
                        <i class="ki-duotone ki-add-files fs-2qx">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </a>
                    <!--end::Action-->

                    <!--begin::Action-->
                    <a href="#"
                        class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-success"
                        data-bs-toggle="tooltip"
                        data-bs-trigger="hover"
                        data-bs-placement="top"
                        title="Add new section">
                        <i class="ki-duotone ki-search-list fs-2qx">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </a>
                    <!--end::Action-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Action wrapper-->
        </div>
        <!--end::Action group-->
    </div>
    <!--end::Toolbar container-->
</div>
@endsection
<!--end::toolbar-->

<!--begin::Main Content-->
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Products</span>
        
                    <span class="text-muted mt-1 fw-semibold fs-7">5 products</span>
                </h3>
                <div class="card-toolbar">
                    <!--begin::Menu-->
                    <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>
                    
        <!--begin::Menu 2-->
        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu separator-->
            <div class="separator mb-3 opacity-75"></div>
            <!--end::Menu separator-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    New Ticket
                </a>
            </div>
            <!--end::Menu item-->
            
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    New Customer
                </a>
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
                <!--begin::Menu item-->
                <a href="#" class="menu-link px-3">
                    <span class="menu-title">New Group</span>
                    <span class="menu-arrow"></span>
                </a>
                <!--end::Menu item-->
        
                <!--begin::Menu sub-->
                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            Admin Group
                        </a>
                    </div>
                    <!--end::Menu item-->
        
                    <!--begin::Menu item-->
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            Staff Group
                        </a>
                    </div>
                    <!--end::Menu item-->
        
                    <!--begin::Menu item-->            
                    <div class="menu-item px-3">
                        <a href="#" class="menu-link px-3">
                            Member Group
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Menu sub-->
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3">
                    New Contact
                </a>
            </div>
            <!--end::Menu item-->
        
            <!--begin::Menu separator-->
            <div class="separator mt-3 opacity-75"></div>
            <!--end::Menu separator-->
        
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <div class="menu-content px-3 py-3">
                    <a class="btn btn-primary  btn-sm px-4" href="#">
                        Generate Reports
                    </a>
                </div>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu 2-->
                    <!--end::Menu-->
                </div>
            </div>
            <!--end::Header-->
        
            <!--begin::Body-->
            <div class="card-body pt-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-300 align-middle gs-0 gy-4">
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
                            @foreach ($products as $product)
                            <tr>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-45px me-5">
                                            <img alt="Pic" src="{{ asset('storage').'/'.$product->image }}">
                                        </div>
                                        <!--end::Avatar-->
    
                                        <!--begin::Name-->
                                        <div class="d-flex justify-content-start flex-column">
                                            <a href="#" class="text-dark fw-bold text-hover-primary mb-1 fs-6">{{ $product->name }}</a>
                                            
                                            <a href="#" class="text-muted text-hover-primary fw-semibold text-muted d-block fs-7">
                                                <span class="text-dark">Rent:</span>{{ $product->rental_price }}</a>
                                        </div>
                                        <!--end::Name-->
                                    </div>                                
                                </td>
                                    
                                <td class="text-end">
                                    <a href="#" class="text-dark fw-bold text-hover-primary d-block mb-1 fs-6">$560,000</a>
                                    <span class="text-muted fw-semibold text-muted d-block fs-7">Paid</span>
                                </td>
    
                                <td class="text-muted fw-semibold text-end">Laravel, Metronic</td>
    
                                <td class="text-end">
                                    <span class="badge badge-light-success">Approved</span>
                                </td>                            
    
                                <td class="text-end">
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="ki-duotone ki-switch fs-2"><span class="path1"></span><span class="path2"></span></i>                                </a>
                                    
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1">
                                        <i class="ki-duotone ki-pencil fs-2"><span class="path1"></span><span class="path2"></span></i>                                </a>
    
                                    <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm">
                                        <i class="ki-duotone ki-trash fs-2"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>                                </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
    </div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
    <div class="modal fade" id="modal_add_customer" tabindex="-1" aria-hidden="true">
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
                        action="{{ route('admin.customer.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New Customer</h1>
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
                            
                            <input type="text" class="form-control form-control-solid" name="name" >
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Input group-->
                        
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Company</label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" name="company">
                            <div class="invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="row mb-8">
                            <div class="col-md-6">
                                <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Phone number</label>
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
                                <label class="required d-flex align-items-center fs-6 fw-semibold mb-2">Email</label>
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
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Address</label>
                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-geolocation-home fs-2">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                    </i>
                                </span>
                                <input type="text" name="address" class="form-control form-control-solid"/>
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
                            <div class="form-text">Allowed file types: png, jpg, jpeg, webp. | Max Size: 1MB</div>
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
@endsection

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/customers/listing/add.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/customers/listing/export.js') }}"></script>
    <script>
        function inputProductData(data, storagePath) {
            $('#editProductId').val(data.id);
            $('#editProductName').val(data.name);
            $('#editProductCategory').val(data.category_id);
            $('#editProductCode').val(data.product_code);
            $('#editProductRentalPrice').val(data.rental_price);
            $('#editProductDimension').val(data.dimension);
            $('#editProductStock').val(data.stock);
            $('#editProductColor').val(data.color);
            $('#editImagePreview').css('background-image', 'url(' + storagePath + '/' + data.image + ')');

            // select the category in the select2
            $('#editProductCategory').select2().trigger('change');
        }

        function inputCategoryData(data, storagePath) {
            // change the form title
            $('#editCategoryId').val(data.id);
            $('#editCategoryName').val(data.name);
            $('#editCategoryImagePreview').css('background-image', 'url(' + storagePath + '/' + data.image + ')');
        }

        var KTCustomersList = function () {
        // Define shared variables
        var datatable;
        var filterMonth;
        var filterPayment;
        var table

        // Private functions
        var initCustomerList = function () {
            // Set date data order
            const tableRows = table.querySelectorAll('tbody tr');

            tableRows.forEach(row => {
                const dateRow = row.querySelectorAll('td');
                const realDate = moment(dateRow[5].innerHTML, "DD MMM YYYY, LT").format(); // select date from 5th column in table
                dateRow[5].setAttribute('data-order', realDate);
            });

            // Init datatable --- more info on datatables: https://datatables.net/manual/
            datatable = $(table).DataTable({
                "info": false,
                'order': [],
                'columnDefs': [ // Disable ordering on column 0 (checkbox)
                    { orderable: false, targets: 6 }, // Disable ordering on column 6 (actions)
                ]
            });

            // Re-init functions on every table re-draw -- more info: https://datatables.net/reference/event/draw
            datatable.on('draw', function () {
                initToggleToolbar();
                handleDeleteRows();
                toggleToolbars();
            });
        }

        // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
        var handleSearchDatatable = () => {
            const filterSearch = document.querySelector('[data-kt-customer-table-filter="search"]');
            filterSearch.addEventListener('keyup', function (e) {
                datatable.search(e.target.value).draw();
            });
        }

        // Delete customer
        var handleDeleteRows = () => {
            // Select all delete buttons
            const deleteButtons = table.querySelectorAll('[data-kt-customer-table-filter="delete_row"]');

            deleteButtons.forEach(d => {
                // Delete button on click
                d.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Select parent row
                    const parent = e.target.closest('tr');

                    // Get customer name
                    const customerName = parent.querySelectorAll('td')[1].innerText;

                    // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                    Swal.fire({
                        text: "Are you sure you want to delete " + customerName + "?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Yes, delete!",
                        cancelButtonText: "No, cancel",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-active-light-primary"
                        }
                    }).then(function (result) {
                        if (result.value) {
                            Swal.fire({
                                text: "You have deleted " + customerName + "!.",
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            }).then(function () {
                                // Remove current row
                                datatable.row($(parent)).remove().draw();
                            });
                        } else if (result.dismiss === 'cancel') {
                            Swal.fire({
                                text: customerName + " was not deleted.",
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn fw-bold btn-primary",
                                }
                            });
                        }
                    });
                })
            });
        }

        // Handle status filter dropdown
        var handleStatusFilter = () => {
            const filterStatus = document.querySelector('[data-kt-ecommerce-order-filter="status"]');
            $(filterStatus).on('change', e => {
                let value = e.target.value;
                if (value === 'all') {
                    value = '';
                }
                datatable.column(4).search(value).draw();
            });
        }

        // Init toggle toolbar
        var initToggleToolbar = () => {
            // Toggle selected action toolbar
            // Select all checkboxes
            const checkboxes = table.querySelectorAll('[type="checkbox"]');

            // Select elements
            const deleteSelected = document.querySelector('[data-kt-customer-table-select="delete_selected"]');

            // Toggle delete selected toolbar
            checkboxes.forEach(c => {
                // Checkbox on click event
                c.addEventListener('click', function () {
                    setTimeout(function () {
                        toggleToolbars();
                    }, 50);
                });
            });

            // Deleted selected rows
            deleteSelected.addEventListener('click', function () {
                // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                Swal.fire({
                    text: "Are you sure you want to delete selected customers?",
                    icon: "warning",
                    showCancelButton: true,
                    buttonsStyling: false,
                    confirmButtonText: "Yes, delete!",
                    cancelButtonText: "No, cancel",
                    customClass: {
                        confirmButton: "btn fw-bold btn-danger",
                        cancelButton: "btn fw-bold btn-active-light-primary"
                    }
                }).then(function (result) {
                    if (result.value) {
                        Swal.fire({
                            text: "You have deleted all selected customers!.",
                            icon: "success",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        }).then(function () {
                            // Remove all selected customers
                            checkboxes.forEach(c => {
                                if (c.checked) {
                                    datatable.row($(c.closest('tbody tr'))).remove().draw();
                                }
                            });

                            // Remove header checked box
                            const headerCheckbox = table.querySelectorAll('[type="checkbox"]')[0];
                            headerCheckbox.checked = false;
                        });
                    } else if (result.dismiss === 'cancel') {
                        Swal.fire({
                            text: "Selected customers was not deleted.",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: "Ok, got it!",
                            customClass: {
                                confirmButton: "btn fw-bold btn-primary",
                            }
                        });
                    }
                });
            });
        }

        // Toggle toolbars
        const toggleToolbars = () => {
            // Define variables
            const toolbarBase = document.querySelector('[data-kt-customer-table-toolbar="base"]');
            const toolbarSelected = document.querySelector('[data-kt-customer-table-toolbar="selected"]');
            const selectedCount = document.querySelector('[data-kt-customer-table-select="selected_count"]');

            // Select refreshed checkbox DOM elements 
            const allCheckboxes = table.querySelectorAll('tbody [type="checkbox"]');

            // Detect checkboxes state & count
            let checkedState = false;
            let count = 0;

            // Count checked boxes
            allCheckboxes.forEach(c => {
                if (c.checked) {
                    checkedState = true;
                    count++;
                }
            });

            // Toggle toolbars
            if (checkedState) {
                selectedCount.innerHTML = count;
                toolbarBase.classList.add('d-none');
                toolbarSelected.classList.remove('d-none');
            } else {
                toolbarBase.classList.remove('d-none');
                toolbarSelected.classList.add('d-none');
            }
        }

        // Public methods
        return {
            init: function () {
                table = document.querySelector('#kt_customers_table');

                if (!table) {
                    return;
                }

                initCustomerList();
                initToggleToolbar();
                handleSearchDatatable();
                handleDeleteRows();
                handleStatusFilter();
            }
        }
    }();

    // On document ready
    KTUtil.onDOMContentLoaded(function () {
        KTCustomersList.init();
    });
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
