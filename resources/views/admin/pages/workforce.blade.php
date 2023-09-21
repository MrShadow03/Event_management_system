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
        <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">

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
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#modal_new_employee">New Employee </a>
                <a href="#" class="btn btn-sm btn-icon fw-bold btn-primary rotate-animation-90" data-bs-toggle="modal"
                    data-bs-target="#modal_settings">
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
<div id="kt_app_content_container" class="app-container container-fluid">
    <!--begin::Card-->
    <div class="card">
        <!--begin::Card header-->
        <div class="card-header border-0 pt-6">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5"><span class="path1"></span><span
                            class="path2"></span></i> <input type="text" data-kt-subscription-table-filter="search"
                        class="form-control form-control-solid w-250px ps-12" placeholder="Search Subscriptions">
                </div>
                <!--end::Search-->
            </div>
            <!--begin::Card title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Toolbar-->
                <div class="d-flex justify-content-end" data-kt-subscription-table-toolbar="base">
                    <!--begin::Filter-->
                    <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click"
                        data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-2"><span class="path1"></span><span
                                class="path2"></span></i> Filter
                    </button>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-dark fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->

                        <!--begin::Separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Separator-->

                        <!--begin::Content-->
                        <div class="px-7 py-5" data-kt-subscription-table-filter="form">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Department:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-kt-subscription-table-filter="department" data-hide-search="true">
                                    <option></option>
                                    @foreach ($workforces->unique('department') as $department)
                                        <option value="{{ $department->department }}">{{ $department->department }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Status:</label>
                                <select class="form-select form-select-solid fw-bold" data-kt-select2="true"
                                    data-placeholder="Select option" data-allow-clear="true"
                                    data-kt-subscription-table-filter="status" data-hide-search="true">
                                    <option></option>
                                    <option value="Present">Present</option>
                                    <option value="Absent">Absent</option>
                                </select>
                            </div>
                            <!--end::Input group-->

                            <!--begin::Input group-->
                            <div class="mb-10">
                                <label class="form-label fs-6 fw-semibold">Salary Range:</label>
                                <div class="row">
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Min Salary" data-kt-subscription-table-filter="min-salary">
                                    </div>
                                    <div class="col">
                                        <input type="number" class="form-control" placeholder="Max Salary" data-kt-subscription-table-filter="max-salary">
                                    </div>
                                </div>
                            </div>
                            <!--end::Input group-->


                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset"
                                    class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6"
                                    data-kt-menu-dismiss="true"
                                    data-kt-subscription-table-filter="reset">Reset</button>
                                <button type="submit" class="btn btn-primary fw-semibold px-6"
                                    data-kt-menu-dismiss="true"
                                    data-kt-subscription-table-filter="filter">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Menu 1--> <!--end::Filter-->

                    <!--begin::Export-->
                    <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal"
                        data-bs-target="#kt_subscriptions_export_modal">
                        <i class="ki-duotone ki-exit-up fs-2"><span class="path1"></span><span
                                class="path2"></span></i> Export
                    </button>
                    <!--end::Export-->
                </div>
                <!--end::Toolbar-->

                <!--begin::Group actions-->
                <div class="d-flex justify-content-end align-items-center d-none"
                    data-kt-subscription-table-toolbar="selected">
                    <div class="fw-bold me-5">
                        <span class="me-2" data-kt-subscription-table-select="selected_count"></span> Selected
                    </div>

                    <button type="button" class="btn btn-danger"
                        data-kt-subscription-table-select="delete_selected">
                        Delete Selected
                    </button>
                </div>
                <!--end::Group actions-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_subscriptions_table">
                <thead>
                    <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                        <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true"
                                    data-kt-check-target="#kt_subscriptions_table .form-check-input" value="1">
                            </div>
                        </th>
                        <th class="min-w-125px">Name</th>
                        <th class="min-w-125px">Status</th>
                        <th class="min-w-125px">Department</th>
                        <th class="min-w-125px">Position</th>
                        <th class="min-w-125px">Phone</th>
                        <th class="min-w-125px">Salary</th>
                        <th class="min-w-125px">TA/DA</th>
                        <th class="min-w-125px">Joining Date</th>
                        <th class="text-end min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 fw-semibold">
                    @forelse ($workforces as $workforce)
                    <tr>
                        <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td>
                        <td>
                            <a href="{{ route('admin.workforce.user', $workforce->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ $workforce->name }}</a>
                        </td>
                        <td>
                            @if ($workforce->status == 1)
                                <div class="badge badge-light-success">Present</div>
                            @else
                                <div class="badge badge-light-danger">Absent</div>
                            @endif
                        </td>
                        <td>
                            <div class="badge badge-light-{{ $loop->index%2 == 0 ? 'info' : 'primary' }}">
                                {{ $workforce->department }}
                            </div>
                        </td>
                        <td>
                            {{ $workforce->position }}
                        </td>
                        <td>
                            {{ $workforce->phone_number }}
                        </td>
                        <td>
                            {{ number_format($workforce->salary, 0, '.', ',') }}
                        </td>
                        <td>
                            {{ number_format($workforce->travel_allowance, 0, '.', ',') }} / {{ number_format($workforce->daily_allowance, 0, '.', ',') }}
                        </td>
                        <td>
                            {{ Carbon\Carbon::parse($workforce->joining_date)->format('d M Y') }}
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                Actions
                                <i class="ki-duotone ki-down fs-5 m-0"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4"
                                data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ route('admin.workforce.user', $workforce->id) }}" class="menu-link px-3">
                                        View
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="add.html" class="menu-link px-3">
                                        Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                        class="menu-link px-3">
                                        Pay Salary
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                        class="menu-link px-3">
                                        Permit Leave
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                        class="menu-link px-3">
                                        View Salary
                                    </a>
                                </div>
                                <!--end::Menu item-->

                                <!--begin::Menu item-->
                                <div class="menu-item px-3"></div>
                                    <a href="#" data-kt-subscriptions-table-filter="delete_row"
                                    class="menu-link px-3">
                                        Delete
                                    </a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="10" class="text-center">No Data Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Card-->

    <!--begin::Modals-->
    <!--begin::Modal - Adjust Balance-->
    <div class="modal fade" id="kt_subscriptions_export_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Export Subscriptions</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div id="kt_subscriptions_export_close" class="btn btn-icon btn-sm btn-active-icon-primary">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span
                                class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_subscriptions_export_form" class="form" action="#">
                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold form-label mb-5">Select Export Format:</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <select name="format" data-control="select2" data-placeholder="Select a format"
                                data-hide-search="true" class="form-select form-select-solid">
                                <option value="excell">Excel</option>
                                <option value="pdf">PDF</option>
                                <option value="cvs">CVS</option>
                                <option value="zip">ZIP</option>
                            </select>
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-10">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold form-label mb-5">Select Date Range:</label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="Pick a date" name="date">
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Row-->
                        <div class="row fv-row mb-15">
                            <!--begin::Label-->
                            <label class="fs-5 fw-semibold form-label mb-5">Payment Type:</label>
                            <!--end::Label-->

                            <!--begin::Radio group-->
                            <div class="d-flex flex-column">
                                <!--begin::Radio button-->
                                <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked"
                                        name="payment_type">
                                    <span class="form-check-label text-gray-600 fw-semibold">
                                        All
                                    </span>
                                </label>
                                <!--end::Radio button-->

                                <!--begin::Radio button-->
                                <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                    <input class="form-check-input" type="checkbox" value="2" checked="checked"
                                        name="payment_type">
                                    <span class="form-check-label text-gray-600 fw-semibold">
                                        Visa
                                    </span>
                                </label>
                                <!--end::Radio button-->

                                <!--begin::Radio button-->
                                <label class="form-check form-check-custom form-check-sm form-check-solid mb-3">
                                    <input class="form-check-input" type="checkbox" value="3"
                                        name="payment_type">
                                    <span class="form-check-label text-gray-600 fw-semibold">
                                        Mastercard
                                    </span>
                                </label>
                                <!--end::Radio button-->

                                <!--begin::Radio button-->
                                <label class="form-check form-check-custom form-check-sm form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="4"
                                        name="payment_type">
                                    <span class="form-check-label text-gray-600 fw-semibold">
                                        American Express
                                    </span>
                                </label>
                                <!--end::Radio button-->
                            </div>
                            <!--end::Input group-->
                        </div>
                        <!--end::Row-->

                        <!--begin::Actions-->
                        <div class="text-center">
                            <button type="reset" id="kt_subscriptions_export_cancel" class="btn btn-light me-3">
                                Discard
                            </button>

                            <button type="submit" id="kt_subscriptions_export_submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span
                                        class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Modal body-->
            </div>
            <!--end::Modal content-->
        </div>
        <!--end::Modal dialog-->
    </div>
    <!--end::Modal - New Card--><!--end::Modals-->
</div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
@endsection
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
<script src="{{ asset('assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
<script src="{{ asset('assets/admin/assets/js/custom/apps/subscriptions/list/export.js') }}"></script>
<script src="{{ asset('assets/admin/assets/js/custom/apps/subscriptions/list/list.js') }}"></script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
