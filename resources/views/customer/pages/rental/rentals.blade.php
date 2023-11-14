@extends('customer.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Rental List | Client</title>
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
    <div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

        <!--begin::Toolbar container-->
        <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

            <!--begin::Page title-->
            <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
                <!--begin::Title-->
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Orders
                </h1>
                <!--end::Title-->

                <!--begin::Breadcrumb-->
                <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('customer.dashboard') }}" class="text-muted text-hover-primary">Home </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">Orders</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
        </div>
        <!--end::Toolbar container-->
    </div>
@endsection
<!--end::toolbar-->

<!--begin::Main Content-->
@section('content')
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="card card-flush">
            <!--begin::Card header-->
            <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center position-relative my-1">
                        <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span
                                class="path2"></span></i> <input type="text" data-kt-ecommerce-order-filter="search"
                            class="form-control form-control-solid w-250px ps-12" placeholder="Search Order" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    {{-- <!--begin::Flatpickr-->
                    <div class="input-group w-250px">
                        <input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range"
                            id="kt_ecommerce_sales_flatpickr" />
                        <button class="btn btn-icon btn-light" id="kt_ecommerce_sales_flatpickr_clear">
                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i>
                        </button>
                    </div>
                    <!--end::Flatpickr--> --}}

                    <div class="w-100 mw-150px">
                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                            data-placeholder="Filter Status" data-kt-ecommerce-order-filter="status">
                            <option value="" selected>Filter</option>
                            <option value="all">All</option>
                            @foreach ($invoices->unique('status')->pluck('status') as $status)
                                <option value="{{ $status }}">{{ ucwords($status) }}</option>
                            @endforeach
                        </select>
                        <!--end::Select2-->
                    </div>

                    <!--begin::Add customer-->
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_create_rental">New Order</button>
                    <!--end::Add customer-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Table-->
                <table class="table align-middle table-bordered table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="">Invoice</th>
                            <th class="text-end px-2">Total</th>
                            <th class="text-end px-2">Paid</th>
                            <th class="text-end px-0">Placed</th>
                            <th class="text-end px-0"></th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @forelse ($invoices as $invoice)
                        <tr>
                            <td class="py-2" data-filter="<span>{{ $invoice->id }} {{ $invoice->status }}</span>">
                                <a href="{{ route('customer.invoice.show', $invoice->id) }}" class="text-hover-primary fw-bold 
                                @if ($invoice->status == 'pending approval')
                                    text-warning
                                @else
                                    text-gray-800
                                @endif
                                ">#{{ $invoice->id }}</a>
                            </td>
                            <td class="text-end pe-0 py-2 px-2">
                                <span class="fw-semibold">{{ number_format($invoice->grand_total) }}</span>
                            </td>
                            <td class="text-end pe-0 py-2 px-2">
                                <span class="fw-semibold {{ $invoice->grand_total == $invoice->paid ? 'text-success' : 'text-danger' }}">{{ number_format($invoice->paid) }}</span>
                            </td>
                            <td class="text-end py-2" data-order="{{ Carbon\Carbon::parse($invoice->created_at)->format('Y-m-d') }}">
                                <span class="fw-semibold">{{ Carbon\Carbon::parse($invoice->created_at)->format('d.m.y') }}</span>
                            </td>
                            <td class="text-end py-2">
                                @if ($invoice->status == 'pending approval')
                                <a href="{{ route('customer.rental.edit', $invoice->id) }}" class="btn btn-sm btn-light-primary btn-flex btn-center btn-hover-primary">
                                    Change
                                </a>
                                @else
                                    
                                @endif
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
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
    <div class="modal fade" id="modal_create_rental" tabindex="-1" aria-hidden="true" data-bs-focus="false">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('customer.rental.create') }}" method="GET">
                        <input type="hidden" name="customer_id" value="{{ auth()->user()->id }}">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Place Order</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Date Range</label>
                            <!--end::Label-->

                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-calendar fs-2">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                        <i class="path3"></i>
                                    </i>
                                </span>
                                <input name="date_range" class="form-control form-control-solid" placeholder="Start day - Return day" id="dateRange" />
                            </div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">Vanue</label>
                            <!--end::Label-->

                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-solid ki-geolocation fs-2">
                                    </i>
                                </span>
                                <input name="venue" class="form-control form-control-solid" placeholder="Venue address" />
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
@endsection

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        $("#dateRange").flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            mode: "range",
            minDate: "today",
        });

        // Class definition
        var KTAppEcommerceSalesListing = function () {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            var initDatatable = function () {
                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    'pageLength': 20,
                    'lengthChange': true,
                    'columnDefs': [ // Disable ordering on column 0 (checkbox)
                        { orderable: false, targets: 4 }, // Disable ordering on column 6 (actions)
                    ]
                });

                // Re-init functions on datatable re-draws
                datatable.on('draw', function () {
                    handleDeleteRows();
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-ecommerce-order-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
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
                    datatable.column(0).search(value).draw();
                });
            }

            // Delete cateogry
            var handleDeleteRows = () => {
                // Select all delete buttons
                const deleteButtons = table.querySelectorAll('[data-kt-ecommerce-order-filter="delete_row"]');

                deleteButtons.forEach(d => {
                    // Delete button on click
                    d.addEventListener('click', function (e) {
                        e.preventDefault();

                        // Select parent row
                        const parent = e.target.closest('tr');

                        // Get category name
                        const orderID = parent.querySelector('[data-kt-ecommerce-order-filter="order_id"]').innerText;

                        // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Are you sure you want to delete order: " + orderID + "?",
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
                                    text: "You have deleted " + orderID + "!.",
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
                                    text: orderID + " was not deleted.",
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


            // Public methods
            return {
                init: function () {
                    table = document.querySelector('#kt_ecommerce_sales_table');

                    if (!table) {
                        return;
                    }

                    initDatatable();
                    handleSearchDatatable();
                    handleStatusFilter();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTAppEcommerceSalesListing.init();
        });
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
