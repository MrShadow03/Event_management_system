@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Products</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Customers
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
                    <li class="breadcrumb-item text-muted">
                        <a href="{{ route('admin.customers') }}" class="text-muted text-hover-primary">Customers </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">{{ $customer->name }}</li>
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
        <div class="d-flex flex-column flex-xl-row">
            <!--begin::Sidebar-->
            <div class="flex-column flex-lg-row-auto w-100 w-xl-350px mb-10">

                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-15">
                        <!--begin::Summary-->
                        <div class="d-flex flex-center flex-column mb-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-150px symbol-circle mb-7">
                                <div class="symbol-label display-5 fw-semibold text-success bg-light-success">{{ $customer->name[0] }}</div>
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Name-->
                            <a href="#" class="fs-3 text-gray-800 text-hover-primary fw-bold mb-1">{{ $customer->name }}</a>
                            <!--end::Name-->

                            <!--begin::Email-->
                            <a href="#" class="fs-5 fw-semibold text-muted text-hover-primary mb-6">{{ $customer->email }}</a>
                            <!--end::Email-->
                        </div>
                        <!--end::Summary-->

                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <div class="fw-bold">
                                Details
                            </div>

                            <!--begin::Badge-->
                            <div class="badge badge-light-info d-inline">user</div>
                            <!--begin::Badge-->
                        </div>
                        <!--end::Details toggle-->

                        <div class="separator separator-dashed my-3"></div>

                        <!--begin::Details content-->
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Account ID</div>
                            <div class="text-gray-600">ID-{{ $customer->id }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Email</div>
                            <div class="text-gray-600"><a href="#"
                                    class="text-gray-600 text-hover-primary">{{ $customer->email }}</a></div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Phone Number</div>
                            <div class="text-gray-600">{{ $customer->phone_number }}</div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Address</div>
                            <div class="text-gray-600">
                                @foreach (explode(',', $customer->address) as $address)
                                    @if ($loop->last)
                                        {{ $address }}
                                    @else
                                        {{ $address }},
                                    @endif
                                @endforeach
                            </div>
                            <!--begin::Details item-->
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Latest Transaction</div>
                            <div class="text-gray-600"><a href="#"
                                    class="text-gray-600 text-hover-primary">#14534</a> </div>
                            <!--begin::Details item-->
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Sidebar-->

            <!--begin::Content-->
            <div class="flex-lg-row-fluid ms-lg-15">
                <!--begin:::Tabs-->
                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                            href="#kt_ecommerce_customer_overview">Overview</a>
                    </li>
                    <!--end:::Tab item-->

                    <!--begin:::Tab item-->
                    <li class="nav-item">
                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                            href="#kt_ecommerce_customer_general">General Settings</a>
                    </li>
                    <!--end:::Tab item-->
                </ul>
                <!--end:::Tabs-->

                <!--begin:::Tab content-->
                <div class="tab-content" id="myTabContent">
                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade show active" id="kt_ecommerce_customer_overview" role="tabpanel">
                        <div class="row row-cols-1 row-cols-md-2 mb-6 mb-xl-9">
                            <div class="col">
                                <!--begin::Card-->
                                <div class="card pt-4 h-md-100 mb-6 mb-md-0">
                                    <!--begin::Card header-->
                                    <div class="card-header border-0">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <h2 class="fw-bold">Reward Points</h2>
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <!--end::Card header-->

                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <div class="fw-bold fs-2">
                                            <div class="d-flex">
                                                <i class="ki-duotone ki-heart text-info fs-2x"><span
                                                        class="path1"></span><span class="path2"></span></i>
                                                <div class="ms-2">
                                                    4,571 <span class="text-muted fs-4 fw-semibold">Points earned</span>
                                                </div>
                                            </div>
                                            <div class="fs-7 fw-normal text-muted">Earn reward points with every purchase.
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Card-->
                            </div>

                            <div class="col">
                                <!--begin::Reward Tier-->
                                <a href="#" class="card bg-info hoverable h-md-100">
                                    <!--begin::Body-->
                                    <div class="card-body">
                                        <i class="ki-duotone ki-award text-white fs-3x ms-n1"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i>
                                        <div class="text-white fw-bold fs-2 mt-5">
                                            Premium Member
                                        </div>

                                        <div class="fw-semibold text-white">
                                            Tier Milestone Reached
                                        </div>
                                    </div>
                                    <!--end::Body-->
                                </a>
                                <!--end::Reward Tier-->
                            </div>
                        </div>


                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Transaction History</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0 pb-5">
                                <!--begin::Table-->
                                <table class="table align-middle table-row-dashed gy-5" id="kt_table_customers_payment">
                                    <thead class="border-bottom border-gray-200 fs-7 fw-bold">
                                        <tr class="text-start text-muted text-uppercase gs-0">
                                            <th class="min-w-100px">order No.</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th class="min-w-100px">Rewards</th>
                                            <th class="min-w-100px">Date</th>
                                        </tr>
                                    </thead>
                                    <tbody class="fs-6 fw-semibold text-gray-600">
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#15626</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>
                                                $1,200.00 </td>
                                            <td>
                                                120 </td>
                                            <td>
                                                14 Dec 2020, 8:43 pm </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#15920</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>
                                                $79.00 </td>
                                            <td>
                                                7 </td>
                                            <td>
                                                01 Dec 2020, 10:12 am </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#14497</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>
                                                $5,500.00 </td>
                                            <td>
                                                550 </td>
                                            <td>
                                                12 Nov 2020, 2:01 pm </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#14348</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>
                                                $880.00 </td>
                                            <td>
                                                88 </td>
                                            <td>
                                                21 Oct 2020, 5:54 pm </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#14457</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>
                                                $7,650.00 </td>
                                            <td>
                                                765 </td>
                                            <td>
                                                19 Oct 2020, 7:32 am </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#14678</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>
                                                $375.00 </td>
                                            <td>
                                                37 </td>
                                            <td>
                                                23 Sep 2020, 12:38 am </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#14753</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-success">Successful</span>
                                            </td>
                                            <td>
                                                $129.00 </td>
                                            <td>
                                                12 </td>
                                            <td>
                                                11 Sep 2020, 3:18 pm </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#15913</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-danger">Rejected</span>
                                            </td>
                                            <td>
                                                $450.00 </td>
                                            <td>
                                                45 </td>
                                            <td>
                                                03 Sep 2020, 1:08 am </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="#"
                                                    class="text-gray-600 text-hover-primary mb-1">#14892</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-light-warning">Pending</span>
                                            </td>
                                            <td>
                                                $8,700.00 </td>
                                            <td>
                                                870 </td>
                                            <td>
                                                01 Sep 2020, 4:58 pm </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!--end::Table-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->

                    <!--begin:::Tab pane-->
                    <div class="tab-pane fade" id="kt_ecommerce_customer_general" role="tabpanel">
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Profile</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0 pb-5">
                                <!--begin::Form-->
                                <form class="form" action="#" id="kt_ecommerce_customer_profile">
                                    <!--begin::Input group-->
                                    <div class="mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2">
                                            <span>Update Avatar</span>

                                            <span class="ms-1" data-bs-toggle="tooltip"
                                                title="Allowed file types: png, jpg, jpeg.">
                                                <i class="ki-duotone ki-information fs-7"><span
                                                        class="path1"></span><span class="path2"></span><span
                                                        class="path3"></span></i> </span>
                                        </label>
                                        <!--end::Label-->

                                        <!--begin::Image input wrapper-->
                                        <div class="mt-1">
                                            <!--begin::Image input placeholder-->
                                            <style>
                                                .image-input-placeholder {
                                                    background-image: url('./assets/admin/assets/media/svg/files/blank-image.svg');
                                                }

                                                [data-bs-theme="dark"] .image-input-placeholder {
                                                    background-image: url('./assets/admin/assets/media/svg/files/blank-image-dark.svg');
                                                }
                                            </style>
                                            <!--end::Image input placeholder-->

                                            <!--begin::Image input-->
                                            <div class="image-input image-input-outline image-input-placeholder"
                                                data-kt-image-input="true">
                                                <!--begin::Preview existing avatar-->
                                                <div class="image-input-wrapper w-125px h-125px"
                                                    style="background-image: url(./assets/admin/assets/media/avatars/300-1.jpg)">
                                                </div>
                                                <!--end::Preview existing avatar-->

                                                <!--begin::Edit-->
                                                <label
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                                    title="Change avatar">
                                                    <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span
                                                            class="path2"></span></i>
                                                    <!--begin::Inputs-->
                                                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                    <input type="hidden" name="avatar_remove" />
                                                    <!--end::Inputs-->
                                                </label>
                                                <!--end::Edit-->

                                                <!--begin::Cancel-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                                    title="Cancel avatar">
                                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>
                                                <!--end::Cancel-->

                                                <!--begin::Remove-->
                                                <span
                                                    class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                    data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                                    title="Remove avatar">
                                                    <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span
                                                            class="path2"></span></i> </span>
                                                <!--end::Remove-->
                                            </div>
                                            <!--end::Image input-->
                                        </div>
                                        <!--end::Image input wrapper-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Input group-->
                                    <div class="fv-row mb-7">
                                        <!--begin::Label-->
                                        <label class="fs-6 fw-semibold mb-2 required">Name</label>
                                        <!--end::Label-->

                                        <!--begin::Input-->
                                        <input type="text" class="form-control form-control-solid" placeholder=""
                                            name="name" value="Max Smith" />
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->

                                    <!--begin::Row-->
                                    <div class="row row-cols-1 row-cols-md-2">
                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span class="required">General Email</span>

                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Email address must be active">
                                                        <i class="ki-duotone ki-information fs-7"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> </span>
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="email" class="form-control form-control-solid"
                                                    placeholder="" name="gen_email" value="max@kt.com" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->

                                        <!--begin::Col-->
                                        <div class="col">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-7">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold mb-2">
                                                    <span>Billing Email</span>

                                                    <span class="ms-1" data-bs-toggle="tooltip"
                                                        title="Email address must be active">
                                                        <i class="ki-duotone ki-information fs-7"><span
                                                                class="path1"></span><span class="path2"></span><span
                                                                class="path3"></span></i> </span>
                                                </label>
                                                <!--end::Label-->

                                                <!--begin::Input-->
                                                <input type="email" class="form-control form-control-solid"
                                                    placeholder="" name="bill_email" value="info@keenthemes.com" />
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->

                                    <div class="d-flex justify-content-end">
                                        <!--begin::Button-->
                                        <button type="submit" id="kt_ecommerce_customer_profile_submit"
                                            class="btn btn-light-primary">
                                            <span class="indicator-label">
                                                Save
                                            </span>
                                            <span class="indicator-progress">
                                                Please wait... <span
                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                            </span>
                                        </button>
                                        <!--end::Button-->
                                    </div>
                                </form>
                                <!--end::Form-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                        <!--begin::Card-->
                        <div class="card pt-4 mb-6 mb-xl-9">
                            <!--begin::Card header-->
                            <div class="card-header border-0">
                                <!--begin::Card title-->
                                <div class="card-title">
                                    <h2>Security Details</h2>
                                </div>
                                <!--end::Card title-->
                            </div>
                            <!--end::Card header-->

                            <!--begin::Card body-->
                            <div class="card-body pt-0 pb-5">
                                <!--begin::Table wrapper-->
                                <div class="table-responsive">
                                    <!--begin::Table-->
                                    <table class="table align-middle table-row-dashed gy-5"
                                        id="kt_table_users_login_session">
                                        <!--begin::Table body-->
                                        <tbody class="fs-6 fw-semibold text-gray-600">
                                            <tr>
                                                <td>Phone</td>
                                                <td>+6141 234 567</td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_phone">
                                                        <i class="ki-duotone ki-pencil fs-3"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </button>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td>******</td>
                                                <td class="text-end">
                                                    <button type="button"
                                                        class="btn btn-icon btn-active-light-primary w-30px h-30px ms-auto"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_update_password">
                                                        <i class="ki-duotone ki-pencil fs-3"><span
                                                                class="path1"></span><span class="path2"></span></i>
                                                    </button>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <!--end::Table body-->
                                    </table>
                                    <!--end::Table-->
                                </div>
                                <!--end::Table wrapper-->
                            </div>
                            <!--end::Card body-->
                        </div>
                        <!--end::Card-->
                    </div>
                    <!--end:::Tab pane-->
                </div>
                <!--end:::Tab content-->
            </div>
            <!--end::Content-->
        </div>
    </div>
    
    <div class="modal fade" id="kt_modal_update_password" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Password</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_update_password_form" class="form" action="#">

                        <!--begin::Input group--->
                        <div class="fv-row mb-10">
                            <label class="required form-label fs-6 mb-2">Current Password</label>

                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="current_password" autocomplete="off" />
                        </div>
                        <!--end::Input group--->

                        <!--begin::Input group-->
                        <div class="mb-10 fv-row" data-kt-password-meter="true">
                            <!--begin::Wrapper-->
                            <div class="mb-1">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold fs-6 mb-2">
                                    New Password
                                </label>
                                <!--end::Label-->

                                <!--begin::Input wrapper-->
                                <div class="position-relative mb-3">
                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                        placeholder="" name="new_password" autocomplete="off" />

                                    <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                        data-kt-password-meter-control="visibility">
                                        <i class="ki-duotone ki-eye-slash fs-1"><span class="path1"></span><span
                                                class="path2"></span><span class="path3"></span><span
                                                class="path4"></span></i> <i class="ki-duotone ki-eye d-none fs-1"><span
                                                class="path1"></span><span class="path2"></span><span
                                                class="path3"></span></i> </span>
                                </div>
                                <!--end::Input wrapper-->

                                <!--begin::Meter-->
                                <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                    <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                </div>
                                <!--end::Meter-->
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Hint-->
                            <div class="text-muted">
                                Use 8 or more characters with a mix of letters, numbers & symbols.
                            </div>
                            <!--end::Hint-->
                        </div>
                        <!--end::Input group--->

                        <!--begin::Input group--->
                        <div class="fv-row mb-10">
                            <label class="form-label fw-semibold fs-6 mb-2">Confirm New Password</label>

                            <input class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                                name="confirm_password" autocomplete="off" />
                        </div>
                        <!--end::Input group--->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                Discard
                            </button>

                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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

    <!--end::Modal - Update password-->
    <div class="modal fade" id="kt_modal_update_phone" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <!--begin::Modal title-->
                    <h2 class="fw-bold">Update Phone Number</h2>
                    <!--end::Modal title-->

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <!--begin::Form-->
                    <form id="kt_modal_update_phone_form" class="form" action="#">
                        <!--begin::Notice-->

                        <!--begin::Notice-->
                        <div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
                            <!--begin::Icon-->
                            <i class="ki-duotone ki-information fs-2tx text-primary me-4"><span
                                    class="path1"></span><span class="path2"></span><span class="path3"></span></i>
                            <!--end::Icon-->

                            <!--begin::Wrapper-->
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <!--begin::Content-->
                                <div class=" fw-semibold">

                                    <div class="fs-6 text-gray-700 ">Please note that a valid phone number may be required
                                        for order or shipping rescheduling.</div>
                                </div>
                                <!--end::Content-->

                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Notice-->
                        <!--end::Notice-->

                        <!--begin::Input group-->
                        <div class="fv-row mb-7">
                            <!--begin::Label-->
                            <label class="fs-6 fw-semibold form-label mb-2">
                                <span class="required">Phone</span>
                            </label>
                            <!--end::Label-->

                            <!--begin::Input-->
                            <input class="form-control form-control-solid" placeholder="" name="profile_phone"
                                value="+6141 234 567" />
                            <!--end::Input-->
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="text-center pt-15">
                            <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">
                                Discard
                            </button>

                            <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                <span class="indicator-label">
                                    Submit
                                </span>
                                <span class="indicator-progress">
                                    Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
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
@endsection
<!--end::Main Content-->

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/customers/details/transaction-history.js') }}">
    </script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/customers/details/update-password.js') }}">
    </script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/customers/details/update-phone.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/customers/details/update-profile.js') }}">
    </script>
    <script></script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
