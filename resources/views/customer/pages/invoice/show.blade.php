@extends('customer.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Invoice-{{ $invoice->id }} | Client</title>
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
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 print-display-none">

    <!--begin::Toolbar container-->
    <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">

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
                    <a href="{{ route('customer.dashboard') }}" class="text-muted text-hover-primary">Home </a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">
                    <a href="{{ route('customer.profile', $invoice->customer->id) }}" class="text-muted text-hover-primary">{{ $invoice->customer->name }}</a>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item">
                    <span class="bullet bg-gray-400 w-5px h-2px"></span>
                </li>
                <!--end::Item-->
                <!--begin::Item-->
                <li class="breadcrumb-item text-muted">Invoice #{{ $invoice->id }}</li>
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

    <!-- begin::Invoice 3-->
    <div class="card">
        <!-- begin::Body-->
        <div class="card-body print">
            <!-- begin::Wrapper-->
            <div class="mx-auto w-100" id="invoice-div">
                <!-- begin::Header-->
                <div class="d-flex justify-content-between flex-column flex-sm-row mb-5">
                    <div>
                        <!--begin::Logo-->
                        <a href="#" class="d-block mw-150px ms-sm-auto">
                            <img alt="Logo" src="{{ asset('storage') . '/' . $commonDetails['logo'] }}" class="w-100" />
                        </a>
                        <!--end::Logo-->
                    </div>
                    <!--end::Logo-->
                    <div class="text-sm-end">
                        <!--begin::Text-->
                        <div class="text-sm-end fw-semibold fs-5 text-gray-700">
                            <div class="fw-bold fs-3 mt-3">{{ $commonDetails['name'] ?? ''}}</div>
                            <div>{{ $commonDetails['phone'] ?? ''}} | +8801918393885</div>
                            <div>{{ $commonDetails['email'] ?? '' }}</div>
                            <div>{{ $commonDetails['address'] ?? '' }}</div>
                            <div>Hafizul Islam-01318322340 || Ibrahim Khalil-01318322348</div>
                        </div>
                        <!--end::Text-->
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div>
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column gap-7 gap-md-10">
                        <div class="d-flex justify-content-between">
                            <div class="fw-bold fs-3 mt-3">
                                {{ $invoice->customer->name ?? '' }}
                                <div class="fw-semibold fs-5 text-gray-700 mt-2">
                                    <div>Customer ID: #{{ $invoice->customer->id ?? ''}}</div>
                                    <div>{{ $invoice->customer->phone_number ?? ''}}</div>
                                    <div>{{ $invoice->customer->address ?? ''}}</div>
                                </div>
                            </div>
                        </div>
                        <!--begin::Message-->

                        {{-- <!--begin::Separator-->
                        <div class="separator"></div>
                        <!--begin::Separator--> --}}

                        <!--begin::Order details-->
                        <div class="d-flex flex-column flex-sm-row gap-7 gap-md-10 fw-bold">
                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">Invoice ID</span>
                                <span class="fs-5">#{{ $invoice->id }}</span>
                            </div>

                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">From</span>
                                <span class="fs-5">
                                    {{ Carbon\Carbon::parse($invoice->rentals[0]->starting_date)->format('d M, Y') }}
                                </span>
                            </div>

                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">Return</span>
                                <span class="fs-5">
                                    {{ Carbon\Carbon::parse($invoice->rentals[0]->ending_date)->format('d M, Y') }}
                                </span>
                            </div>

                            <div class="flex-root d-flex flex-column">
                                <span class="text-muted">Total Days</span>
                                <span class="fs-5">{{ $invoice->rentals[0]->number_of_days ?? '' }}</span>
                            </div>
                        </div>
                        <!--end::Order details-->

                        {{-- <!--begin::Billing & shipping-->
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
                        <!--end::Billing & shipping--> --}}

                        <!--begin:Order summary-->
                        <div class="d-flex justify-content-between flex-column">
                            <!--begin::Table-->
                            <div class="table-responsive mb-9">
                                <table class="table align-middle fs-6 mb-0">
                                    <thead>
                                        <tr class="border-bottom fs-6 fw-bold text-muted">
                                            <th class="min-w-175px pb-2">Products</th>
                                            <th class="min-w-70px text-end pb-2">SKU</th>
                                            <th class="min-w-70px text-end pb-2">Rent(BDT)</th>
                                            <th class="min-w-80px text-end pb-2">QTY</th>
                                            <th class="min-w-100px text-end pb-2">Total(BDT)</th>
                                        </tr>
                                    </thead>

                                    <tbody class="fw-semibold text-gray-600">
                                        @php
                                            $total = 0;
                                        @endphp
                                        @foreach ($invoice->rentals as $rental)
                                        <tr class="pb-2">
                                            <td class="py-1">
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Thumbnail-->
                                                    <a href="#" class="symbol symbol-40px">
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
                                            <td class="py-1 text-end">{{ $rental->product->product_code }}</td>
                                            <td class="py-1 text-end">{{ number_format($rental->product->rental_price) }}</td>
                                            <td class="text-end">{{ $rental->quantity }}</td>
                                            <td class="text-end">
                                                @php
                                                    $total += $rental->product->rental_price * $rental->quantity * $rental->number_of_days;
                                                @endphp
                                                {{ number_format($rental->product->rental_price * $rental->quantity * $rental->number_of_days) }}
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr class="border-top border-dashed border-gray-300">
                                            <td colspan="4" class="pt-3 text-end">Subtotal</td>
                                            <td class="py-1 text-end">{{ number_format($invoice->subtotal) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">Discount</td>
                                            <td class="pt-1 text-end">{{ number_format($invoice->discount) }}</td>
                                        </tr>
                                        @php
                                            $discountedTotal = $invoice->subtotal - $invoice->discount;
                                            $vatAmaount = $discountedTotal * $invoice->vat_percentage / 100;
                                        @endphp
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">VAT ({{ $invoice->vat_percentage }}%)</td>
                                            <td class="pt-1 text-end">{{ number_format($vatAmaount) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">Grand Total</td>
                                            <td class="pt-1 text-end">{{ number_format($invoice->grand_total) }}</td>
                                        </tr>
                                        {{-- border border-top-1 border-gray-300 border-end-0 border-start-0 border-bottom-0
                                        border border-top-1 border-gray-300 border-end-0 border-start-0 border-bottom-0 --}}
                                        <tr class="border-top border-dashed border-gray-300">
                                            <td colspan="4" class="pt-3 text-end fw-bold">Paid</td>
                                            <td class="pt-3 text-end fw-bold">{{ number_format($invoice->paid) }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">Due</td>
                                            <td class="pt-1 text-end">{{ number_format($invoice->due) }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->

                            <!--begin::Customer & Client Signatures-->
                            <div class="d-flex justify-content-between w-75 mt-5">
                                <!--begin::Customer-->
                                <div class="d-flex flex-column me-7 border-top border-gray-300 w-200px">
                                    <div class="fs-5 fw-bold pt-5">{{ $invoice->customer->name ?? '' }}</div>
                                    <div class="fs-6">Client</div>
                                </div>
                                <!--end::Customer-->

                                <!--begin::Customer-->
                                <div class="d-flex flex-column me-7 border-top border-gray-300 w-200px">
                                    <div class="fs-12 pt-5">APPROVED BY</div>
                                    <div class="fs-5 fw-bold">{{ $admin ?? '' }}</div>
                                    <div class="fs-6">COO</div>
                                </div>
                                <!--end::Customer-->
                            </div>
                            <!--end::Customer & Client Signatures-->
                        </div>
                        <!--end:Order summary-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Body-->

                <!-- begin::Footer-->
                <div class="d-flex flex-stack flex-wrap mt-lg-20 pt-13 print-display-none">
                    <!-- begin::Actions-->
                    <div class="my-1 me-5 print-display-none">
                        <!-- begin::Pint-->
                        <button type="button" class="btn btn-success my-1 me-12 print-display-none" onclick="window.print();">Print
                            Invoice</button>
                        <!-- end::Pint-->

                        {{-- <!-- begin::Download-->
                        <button type="button" id="downloadPdfButton" class="btn btn-light-success my-1 ">Download</button>
                        <!-- end::Download--> --}}
                    </div>
                    <!-- end::Actions-->
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
