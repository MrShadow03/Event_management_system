@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Transaction Reporting | Admin</title>
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
        #products_table_filter{
            display: none;
        }
        .dt-buttons{
            text-align: end !important;
        }
    </style>
@endsection
<!--end::Page Custom Styles-->

<!--begin::toolbar-->
@section('toolbar')
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 ">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

        <!--begin::Page title-->
        <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3 ">
            <!--begin::Title-->
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Transactions</h1>
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
                <li class="breadcrumb-item text-muted">Transactions</li>
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

<!--begin::Main Content-->
@section('content')
<div id="kt_app_content_container" class="app-container container-fluid">

    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i><input type="text" data-transaction-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
    
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <!--begin::Flatpickr-->
                <div class="input-group w-250px">
                    <input class="form-control form-control-solid rounded rounded-end-0" placeholder="Pick date range" id="transactions_flatpickr_input" />
                    <button class="btn btn-icon btn-light" id="transactions_flatpickr_clear">
                        <i class="ki-duotone ki-cross fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
                <!--end::Flatpickr-->
                <!--begin::filter customer-->
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid font-bn" data-control="select2" data-placeholder="Filter Type" data-transaction-filter="type">
                        <option></option>
                        <option value="all">All</option>
                        @foreach ($transactions->unique('description') as $transaction)
                            <option value="{{ $transaction->description }}">{{ ucwords($transaction->description) }}</option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                </div>
                <!--begin::filter customer-->
                <!--begin::filter customer-->
                <div class="w-100 mw-200px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid font-bn" data-control="select2" data-placeholder="Filter Customer" data-transaction-filter="customer">
                        <option></option>
                        <option value="all">All</option>
                        @foreach ($transactions->unique('customer_id') as $transaction)
                            <option value="{{ $transaction->customer->id }}">#{{ $transaction->customer->id }} {{ $transaction->customer->name }}</option>
                        @endforeach
                    </select>
                    <!--end::Select2-->
                </div>
                <!--begin::filter customer-->
                <!--begin::Export-->
                <button type="button" class="btn btn-light-primary" onclick="toggleDtButtons()">
                    <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span class="path2"></span></i>Export Report
                </button>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        <th class="">#</th>
                        <th class="">Customer</th>
                        <th class="text-center">Type</th>
                        <th class="">Amount</th>
                        <th class="">Deposit Balance</th>
                        <th class="">Processed By</th>
                        <th class="">Invoice</th>
                        <th class="text-center">Time</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @php
                        $index = 0;
                    @endphp
                    @foreach ($transactions as $transaction)
                    <tr>
                        <td>
                            {{ $index = $index+1 }}
                        </td>
                        <td class="text-gray-700" data-filter="{{ $transaction->customer->id }} {{ $transaction->customer->name }}">
                            <a href="{{ route('admin.customer.show', $transaction->customer->id) }}" class="text-gray-800 fw-semibold text-hover-primary fs-6">{{ $transaction->customer->name }}</a>
                        </td>
                        <td class="text-center" data-filter="{{ $transaction->description }}">
                            @if ($transaction->type == 'in')
                                <span class="badge badge-success">{{ ucwords($transaction->description) }}</span>
                            @else
                                <span class="badge badge-danger">{{ ucwords($transaction->description) }}</span>
                            @endif
                        </td>
                        <td class="text-gray-700">
                            <span>{{ number_format($transaction->amount) }}</span>
                        </td>
                        <td class="text-gray-700">
                            <span>{{ number_format($transaction->balance) }}</span>
                        </td>
                        <td class="text-gray-700">{{ $transaction->user->name }}</td>
                        <td class="text-gray-700" data-filter="{{ $transaction->invoice_id ?? '' }}">
                            @if ($transaction->invoice_id)
                                <a href="{{ route('admin.invoice.show', $transaction->invoice_id) }}" class="text-gray-700 fw-semibold text-hover-primary fs-6">#{{ $transaction->invoice->id }}</a>
                            @else
                                <span class="badge badge-secondary">N/A</span>
                            @endif
                        </td>
                        <td class="text-gray-700 text-center" data-filter="<span>{{ Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y') }}</span>" data-order="{{ Carbon\Carbon::parse($transaction->created_at)->format('Y-m-d') }}">
                            {{ Carbon\Carbon::parse($transaction->created_at)->format('d M, Y h:i A') }}
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

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
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
            $('#editImagePreview').css('background-image', 'url('+ storagePath + '/' + data.image + ')');

            // select the category in the select2
            $('#editProductCategory').select2().trigger('change');
        }

        function inputCategoryData(data, storagePath) {
            // change the form title
            $('#editCategoryId').val(data.id);
            $('#editCategoryName').val(data.name);
            $('#editCategoryImagePreview').css('background-image', 'url('+ storagePath + '/' + data.image + ')' );
        }

        const table = document.querySelector('#products_table');;
        const datatable = $(table).DataTable({
                    "info": true,
                    'order': [],
                    'pageLength': 10,
                    'dom': 'Bfrtip',
                    'buttons': [
                        'copyHtml5',
                        'excelHtml5',
                        'pdfHtml5'
                    ]
        });

        // Class definition
        var KTAppEcommerceProducts = function () {
            var flatpickr;
            var minDate, maxDate;

            // Init flatpickr --- more info :https://flatpickr.js.org/getting-started/
            var initFlatpickr = () => {
                const element = document.querySelector('#transactions_flatpickr_input');
                flatpickr = $(element).flatpickr({
                    altInput: true,
                    altFormat: "d/m/Y",
                    dateFormat: "Y-m-d",
                    mode: "range",
                    onChange: function (selectedDates, dateStr, instance) {
                        handleFlatpickr(selectedDates, dateStr, instance);
                    },
                });
            }

            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-transaction-filter="search"]');
                filterSearch.addEventListener('input', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Handle status filter dropdown
            var handleCustomerFilter = () => {
                const filterStatus = document.querySelector('[data-transaction-filter="customer"]');
                $(filterStatus).on('change', e => {
                    let value = e.target.value;
                    if(value === 'all'){
                        value = '';
                    }
                    datatable.column(1).search(value ? '^' + value + '$' : '', true, false).draw();
                });
            }
            
            // Handle status filter dropdown
            var handleTypeFilter = () => {
                const filterStatus = document.querySelector('[data-transaction-filter="type"]');
                $(filterStatus).on('change', e => {
                    let value = e.target.value;
                    if(value === 'all'){
                        value = '';
                    }
                    datatable.column(2).search(value ? '^' + value + '$' : '', true, false).draw();
                });
            }

            // Handle flatpickr --- more info: https://flatpickr.js.org/events/
            var handleFlatpickr = (selectedDates, dateStr, instance) => {
                minDate = selectedDates[0] ? new Date(selectedDates[0]) : null;
                maxDate = selectedDates[1] ? new Date(selectedDates[1]) : null;

                // Custom filtering function which will search data in column four between two values
                $.fn.dataTable.ext.search.push(
                    function (settings, data, dataIndex) {
                        var min = minDate;
                        var max = maxDate;
                        var dateAdded = new Date(moment($(data[7]).text(), 'DD/MM/YYYY'));
                        
                        if ((min === null && max === null) || (min <= dateAdded && max === null) || (min === null && max >= dateAdded) || (min <= dateAdded && max >= dateAdded)) {
                            return true;
                        }
                        return false;
                    }
                );
                datatable.draw();
            }

            // Handle clear flatpickr
            var handleClearFlatpickr = () => {
                const clearButton = document.querySelector('#transactions_flatpickr_clear');
                clearButton.addEventListener('click', e => {
                    flatpickr.clear();
                });
            }

            // Public methods
            return {
                init: function () {
                    if (!table) {
                        return;
                    }

                    initFlatpickr();
                    handleClearFlatpickr();
                    handleSearchDatatable();
                    handleTypeFilter();
                    handleCustomerFilter();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTAppEcommerceProducts.init();
        });


        const dtButtons = document.querySelector('.dt-buttons');
        dtButtons.classList.add('d-none');

        function toggleDtButtons(){
            if(dtButtons.classList.contains('d-none')){
                dtButtons.classList.remove('d-none');
            }else{
                dtButtons.classList.add('d-none');
            }
        }

    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
