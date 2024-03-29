@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Rental List | Admin</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Rentals
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
                    <li class="breadcrumb-item text-muted">Rentals</li>
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
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_create_rental">
                        <i class="ki-duotone ki-cheque fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                            <span class="path6"></span>
                            <span class="path7"></span>
                        </i>
                        New Rent
                    </button>
                </div>
                <!--end::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                    <span class="fs-4 text-gray-800 fw-semibold">
                        Recent Rentals
                    </span>
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
                            <th class="min-w-100px">Invoice ID</th>
                            <th class="min-w-175px">Customer</th>
                            <th class="text-end min-w-70px">Status</th>
                            <th class="text-end min-w-100px">Total</th>
                            <th class="text-end min-w-100px">From</th>
                            <th class="text-end min-w-100px">Return Date</th>
                        </tr>
                    </thead>
                    <tbody class="fw-semibold text-gray-600">
                        @forelse ($invoices as $invoice)
                        <tr>
                            <td class="py-2" data-kt-ecommerce-order-filter="order_id">
                                <a href="{{ route('admin.invoice.show', $invoice->id) }}" class="text-gray-800 text-hover-primary fw-bold">{{ $invoice->id }}</a>
                            </td>
                            <td class="py-2">
                                <div class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                <div class="symbol symbol-circle symbol-30px overflow-hidden me-3">
                                    <a href="{{ route('admin.customer.show', $invoice->customer->id ) }}">
                                        <div class="symbol-label">
                                            <img src="{{ asset('storage').'/'.$invoice->customer->image }}" alt="Emma Smith" class="w-100">
                                        </div>
                                    </a>
                                </div>
                                <!--end::Avatar-->

                                    <div class="ms-5">
                                        <!--begin::Title-->
                                        <a href="{{ route('admin.customer.show', $invoice->customer->id) }}"
                                            class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $invoice->customer->name }}</a>
                                        <!--end::Title-->
                                    </div>
                                </div>
                            </td>
                            <td class="text-end pe-0 py-2" data-order="{{ $invoice->status }}">
                                @if ($invoice->status == 'approved')
                                    <span class="badge badge-primary cursor-pointer" title="{{ ucfirst($invoice->status) }}">{{ ucwords($invoice->status) }}</span>
                                @elseif($invoice->status == 'rented')
                                    <span class="badge badge-danger cursor-pointer" title="{{ ucfirst($invoice->status) }}">{{ ucwords($invoice->status) }}</span>
                                @elseif($invoice->status == 'returned')
                                    <span class="badge badge-success cursor-pointer" title="{{ ucfirst($invoice->status) }}">{{ ucwords($invoice->status) }}</span>
                                @elseif($invoice->status == 'pending approval')
                                    <span class="badge badge-warning cursor-pointer" title="{{ ucfirst($invoice->status) }}">{{ ucwords($invoice->status) }}</span>
                                @endif
                            </td>
                            <td class="text-end pe-0 py-2">
                                <span class="fw-bold">{{ $invoice->grand_total }}</span>
                            </td>
                            <td class="text-end py-2" data-order="{{ Carbon\Carbon::parse($invoice->starting_date)->format('Y-m-d') }}">
                                <span class="fw-bold">{{ Carbon\Carbon::parse($invoice->starting_date)->format('d/m/Y') }}</span>
                            </td>
                            <td class="text-end py-2" data-order="{{ Carbon\Carbon::parse($invoice->ending_date)->format('Y-m-d') }}">
                                <span class="fw-bold">{{ Carbon\Carbon::parse($invoice->ending_date)->format('d/m/Y') }}</span>
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
                    </tbody>
                </table>
                <!--end::Table-->
            </div>
            <!--end::Card body-->

            <!--begin::Card footer-->
            <div class="card-footer pt-0">
                <a href="{{ route('admin.reporting.orders') }}" class="btn btn-secondary btn-sm">
                    <i class="ki-duotone ki-exit-right-corner fs-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    View All
                </a>
            </div>
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
                        action="{{ route('admin.rental.create') }}" method="GET">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New Rent</h1>
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

                            <div class="input-group input-group-solid flex-nowrap">
                                <span class="input-group-text">
                                    <i class="ki-duotone ki-profile-user fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                    </i>
                                </span>
                                <div class="overflow-hidden flex-grow-1">
                                    <select class="form-select form-select-solid rounded-start-0 border-start" data-control="select2" data-placeholder="Select an customer" data-dropdown-parent="#modal_create_rental" name="customer_id">
                                        <option></option>
                                        @foreach ($customers as $customer)
                                            <option value="{{ $customer->id }}">{{ $customer->name.' '.'#'.$customer->id }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!--end::Input group-->

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
    <script>
        $("#dateRange").flatpickr({
            altInput: true,
            altFormat: "F j, Y",
            dateFormat: "Y-m-d",
            mode: "range",
            minDate: "today",
        });
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
