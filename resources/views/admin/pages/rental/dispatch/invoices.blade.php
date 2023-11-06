@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Dispatchable Invoices | Admin</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dispatch Orders 
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
                    <li class="breadcrumb-item text-muted">Dispatch</li>
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
                            class="form-control form-control-solid w-250px ps-12" placeholder="Search Requests" />
                    </div>
                    <!--end::Search-->
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <!--begin::Flatpickr-->
                    <form method="GET" action="#" class="input-group w-250px">
                        <input name="date" type="date" onchange="this.form.submit()" class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick a date" value="{{ request()->date ? Carbon\Carbon::parse(request()->date)->format('Y-m-d') : Carbon\Carbon::now()->format('Y-m-d') }}" />
                    </form>
                    <!--end::Flatpickr-->
                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->

            <!--begin::Card body-->
            <div class="card-body pt-0">

                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_sales_table">
                    <thead>
                        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                            <th class="">Invoice ID</th>
                            <th class="">Customer</th>
                            <th class="text-end">Status</th>
                            <th class="text-end">Total Orders</th>
                            <th class="text-end">Placed On</th>
                            <th class="text-end">Venue</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @forelse ($invoices as $invoice)
                        <tr>
                            <td data-kt-ecommerce-order-filter="order_id">
                                <a href="{{ route('admin.invoice.show', $invoice->id) }}" class="text-gray-800 text-hover-primary fw-bold">#{{ $invoice->id }}</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.customer.show', $invoice->customer->id) }}" class="text-gray-800 text-hover-primary fw-bold">{{ $invoice->customer->name }}</a>
                            </td>
                            <td class="text-end pe-0">
                                <!--begin::Badges-->
                                <div class="badge badge-light-success">{{ strtoupper($invoice->status) }}</div>
                                <!--end::Badges-->
                            </td>
                            <td class="text-end pe-0">
                                <span class="text-gray-800">{{ $invoice->rentals->count() }}</span>
                            </td>
                            <td class="text-end" data-order="{{ Carbon\Carbon::parse($invoice->created_at)->format('Y-m-d') }}">
                                {{ Carbon\Carbon::parse($invoice->created_at)->format('d M, y') }}
                            </td>
                            <td class="text-end">
                                {{ $invoice->venue ?? 'N/A' }}
                            </td>
                            <td class="text-end">
                                <a href="{{ route('admin.rentals.dispatch.orders', $invoice->id) }}" class="btn btn-sm btn-primary">
                                    <i class="ki-duotone ki-delivery fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                    Dispatch
                                </a>
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

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    {{-- <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/sales/listing.js') }}"></script> --}}
    <script>
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
                    'pageLength': 10,
                    'columnDefs': [
                        { orderable: false, targets: 0 }, // Disable ordering on column 0 (checkbox)
                        { orderable: false, targets: 6 }, // Disable ordering on column 7 (actions)
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
                    datatable.column(3).search(value).draw();
                });
            }

            // Handle clear flatpickr
            var handleClearFlatpickr = () => {
                const clearButton = document.querySelector('#kt_ecommerce_sales_flatpickr_clear');
                clearButton.addEventListener('click', e => {
                    flatpickr.clear();
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
