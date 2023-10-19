@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Invoice</title>
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
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Invoice
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
                <li class="breadcrumb-item text-muted">Invoice</li>
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
<div id="kt_app_content_container" class="app-container  container-xxl ">

    <!-- begin::Invoice 3-->
    <div class="card">
        <!-- begin::Body-->
        <div class="card-body py-20">
            <!-- begin::Wrapper-->
            <div class="mw-lg-950px mx-auto w-100">
                <!-- begin::Header-->
                <div class="d-flex justify-content-between flex-column flex-sm-row mb-19">
                    <div>
                        <h4 class="fw-bolder text-gray-800 fs-2qx">INVOICE</h4>
                        <div class="fw-bolder text-gray-800 fs-1 pe-5 pb-7">#{{ $invoice->id }}</div>
                    </div>
                    <!--end::Logo-->
                    <div class="text-sm-end">
                        <!--begin::Logo-->
                        <a href="#" class="d-block mw-150px ms-sm-auto">
                            <img alt="Logo" src="{{ asset('storage') . '/' . $commonDetails['logo'] }}" class="w-100" />
                        </a>
                        <!--end::Logo-->

                        <!--begin::Text-->
                        <div class="text-sm-end fw-semibold fs-5 text-gray-700 mt-7">
                            <div>{{ $commonDetails['name'] ?? ''}}</div>
                            <div>{{ $commonDetails['phone'] ?? ''}}</div>
                            <div>{{ $commonDetails['email'] ?? '' }}</div>
                            <div>{{ $commonDetails['address'] ?? '' }}</div>
                        </div>
                        <!--end::Text-->
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="pb-12">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column gap-7 gap-md-10">
                        <!--begin::Message-->
                        <div class="fw-bold fs-2">
                            {{ $invoice->customer->name ?? '' }}
                            <div class="fw-semibold fs-5 text-gray-700 mt-7">
                                <div>Customer ID: #{{ $invoice->customer->id ?? ''}}</div>
                                <div>{{ $invoice->customer->name ?? ''}}</div>
                                <div>{{ $invoice->customer->phone_number ?? ''}}</div>
                                <div>{{ $invoice->customer->email ?? '' }}</div>
                            </div>
                        </div>
                        <!--begin::Message-->

                        <!--begin::Separator-->
                        <div class="separator"></div>
                        <!--begin::Separator-->

                        <!--begin::Order details-->
                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">From</span>
                                <span class="fs-5">10 July, 2023</span>
                            </div>

                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">Return</span>
                                <span class="fs-5">12 August, 2023</span>
                            </div>

                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">Total Days</span>
                                <span class="fs-5">{{ $invoice->rentals[0]->number_of_days ?? '' }}</span>
                            </div>

                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">Approved By</span>
                                <span class="fs-5">{{ auth()->user()->name }}</span>
                            </div>
                        </div>
                        <!--end::Order details-->

                        <!--begin::Billing & shipping-->
                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">Billing Address</span>
                                <span class="fs-6 mt-2">
                                    @foreach (explode(',', $invoice->customer->address) as $item)
                                    @if($loop->last)
                                    {{ $item }}
                                    @else
                                    {{ $item }},<br />
                                    @endif
                                    @endforeach
                                </span>
                            </div>
                        </div>
                        <!--end::Billing & shipping-->

                        <!--begin:Order summary-->
                        <div class="d-flex justify-content-between flex-column">
                            <!--begin::Table-->
                            <div class="table-responsive border-bottom mb-9">
                                <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                    <thead>
                                        <tr class="border-bottom fs-6 fw-bold text-muted">
                                            <th class="min-w-175px pb-2">Products</th>
                                            <th class="min-w-70px text-end pb-2">SKU</th>
                                            <th class="min-w-80px text-end pb-2">QTY</th>
                                            <th class="min-w-100px text-end pb-2">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody class="fw-semibold text-gray-600">
                                        @php
                                            $total = 0;
                                            $vat = 15;
                                            $discount = 0;
                                        @endphp
                                        {{-- {{ dd($invoice->rentals[0]->product->image) }} --}}
                                        @foreach ($invoice->rentals as $rental)
                                        <tr>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="#" class="symbol symbol-50px">
                                                        <img src="{{ asset('storage') . '/' . $rental->product->image }}" alt="image" />
                                                    </a>
                                                    <!--end::Thumbnail-->

                                                    <!--begin::Title-->
                                                    <div class="ms-5">
                                                        <div class="fw-bold">{{ $rental->product->name }}</div>
                                                        <div class="fs-7 text-muted">Rent ID: #{{ $rental->id }}</div>
                                                    </div>
                                                    <!--end::Title-->
                                                </div>
                                            </td>
                                            <td class="text-end">{{ $rental->product->product_code }}</td>
                                            <td class="text-end">{{ $rental->quantity }}</td>
                                            <td class="text-end">
                                                @php
                                                    $total += $rental->product->rental_price * $rental->quantity * $rental->number_of_days;
                                                @endphp
                                                {{ $rental->product->rental_price * $rental->quantity * $rental->number_of_days }}
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td colspan="3" class="text-end">
                                                Subtotal
                                            </td>
                                            <td class="text-end">
                                                {{ $total }}
                                            </td>
                                        </tr>
                                        @php
                                            $discountedTotal = $total - $discount;
                                            $vat = ($discountedTotal * $vat) / 100;
                                        @endphp
                                        <tr>
                                            <td colspan="3" class="text-end">
                                                VAT (15%)
                                            </td>
                                            <td class="text-end">
                                                {{ $vat }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="text-end">
                                                Discount TK
                                            </td>
                                            <td class="text-end">
                                                {{ $discount }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="3" class="fs-3 text-dark fw-bold text-end">
                                                Grand Total
                                            </td>
                                            <td class="text-dark fs-3 fw-bolder text-end">
                                                {{ $discountedTotal + $vat }}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end:Order summary-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->

                <!-- begin::Footer-->
                <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13">
                    <!-- begin::Actions-->
                    <div class="my-1 me-5">
                        <!-- begin::Pint-->
                        <button type="button" class="btn btn-success my-1 me-12" onclick="window.print();">Print
                            Invoice</button>
                        <!-- end::Pint-->

                        <!-- begin::Download-->
                        <button type="button" class="btn btn-light-success my-1">Download</button>
                        <!-- end::Download-->
                    </div>
                    <!-- end::Actions-->

                    <!-- begin::Action-->
                    <a href="../create.html" class="btn btn-primary my-1">Create Invoice</a>
                    <!-- end::Action-->
                </div>
                <!-- end::Footer-->
            </div>
            <!-- end::Wrapper-->
        </div>
        <!-- end::Body-->
    </div>
    <!-- end::Invoice 1-->
</div>
@endsection
<!--end::Main Content-->

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
@endsection
<!--end::Page Vendors Javascript and custom JS-->
