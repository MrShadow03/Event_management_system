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

{{-- <!--begin::toolbar-->
@section('toolbar')
<div id="kt_app_toolbar" class="app-toolbar  py-3 py-lg-6 print-display-none">

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
<!--end::toolbar--> --}}

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
                            <div>{{ $commonDetails['phone'] ?? ''}}</div>
                            <div>{{ $commonDetails['email'] ?? '' }}</div>
                            <div>{{ $commonDetails['address'] ?? '' }}</div>
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
                            <div class="table-responsive mb-9">
                                <table class="table align-middle fs-6 mb-0">
                                    <thead>
                                        <tr class="border-bottom fs-6 fw-bold text-muted">
                                            <th class="min-w-175px pb-2">Products</th>
                                            <th class="min-w-70px text-end pb-2">SKU</th>
                                            <th class="min-w-70px text-end pb-2">Rent</th>
                                            <th class="min-w-80px text-end pb-2">QTY</th>
                                            <th class="min-w-100px text-end pb-2">Total</th>
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
                                            <td class="py-1 text-end">{{ $rental->product->rental_price }}</td>
                                            <td class="text-end">{{ $rental->quantity }}</td>
                                            <td class="text-end">
                                                @php
                                                    $total += $rental->product->rental_price * $rental->quantity * $rental->number_of_days;
                                                @endphp
                                                {{ $rental->product->rental_price * $rental->quantity * $rental->number_of_days }}
                                            </td>
                                        </tr>
                                        @endforeach
                                        <tr class="border-top border-dashed border-gray-300">
                                            <td colspan="4" class="pt-3 text-end">Subtotal</td>
                                            <td class="py-1 text-end">{{ $invoice->subtotal }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">Discount</td>
                                            <td class="pt-1 text-end">{{ $invoice->discount }}</td>
                                        </tr>
                                        @php
                                            $discountedTotal = $invoice->subtotal - $invoice->discount;
                                            $vatAmaount = $discountedTotal * $invoice->vat_percentage / 100;
                                        @endphp
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">VAT ({{ $invoice->vat_percentage }}%)</td>
                                            <td class="pt-1 text-end">{{ $vatAmaount }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">Grand Total</td>
                                            <td class="pt-1 text-end">{{ $invoice->grand_total }}</td>
                                        </tr>
                                        {{-- border border-top-1 border-gray-300 border-end-0 border-start-0 border-bottom-0
                                        border border-top-1 border-gray-300 border-end-0 border-start-0 border-bottom-0 --}}
                                        <tr class="border-top border-dashed border-gray-300">
                                            <td colspan="4" class="pt-3 text-end fw-bold">Paid</td>
                                            <td class="pt-3 text-end fw-bold">{{ $invoice->paid }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="4" class="pt-1 text-end">Due</td>
                                            <td class="pt-1 text-end">{{ $invoice->due }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!--end::Table-->

                            <!--begin::Customer & Client Signatures-->
                            <div class="d-flex justify-content-between w-75 mt-5">
                                <!--begin::Customer-->
                                <div class="d-flex flex-column me-7 border-top border-gray-300 w-200px">
                                    <div class="fs-5 fw-bold pt-5">{{ auth()->user()->name ?? '' }}</div>
                                    <div class="fs-6">CCO</div>
                                </div>
                                <!--end::Customer-->
                                
                                <!--begin::Customer-->
                                <div class="d-flex flex-column me-7 border-top border-gray-300 w-200px">
                                    <div class="fs-5 fw-bold pt-5">{{ $invoice->customer->name ?? '' }}</div>
                                    <div class="fs-6">Client</div>
                                </div>
                                <!--end::Customer-->
                            </div>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js" integrity="sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
        const downloadPdfButton = document.getElementById('downloadPdfButton');
        downloadPdfButton.addEventListener('click', function() {
            const invoiceDiv = document.getElementById('invoice-div');
            // alert(invoiceDiv);
            const pdfOptions = {
                margin: 10,
                filename: 'invoice.pdf',
                image: { type: 'jpeg', quality: 0.98 },
                html2canvas: { scale: 2 },
                jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
            };

            html2pdf().from(invoiceDiv).set(pdfOptions).outputPdf(function(pdf) {
                const blob = new Blob([pdf], { type: 'application/pdf' });
                const url = URL.createObjectURL(blob);
                const link = document.createElement('a');
                link.href = url;
                link.download = 'invoice.pdf';
                link.click();
            });
        });

</script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
