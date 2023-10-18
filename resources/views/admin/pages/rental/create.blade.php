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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Add Order
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
                        <a href="{{ route('admin.rentals') }}" class="text-muted text-hover-primary">Rentals </a>
                    </li>
                    <!--end::Item-->

                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-400 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-muted">New Rental</li>
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
        <!--begin::Form-->
        <form id="kt_ecommerce_edit_order_form" class="form d-flex flex-column flex-lg-row" action="{{ route('admin.rental.store') }}" method="POST">
            @csrf
            @method('POST')
            <input type="hidden" name="customer_id" value="{{ $customer->id }}">
            <input type="hidden" name="invoice_id" value="{{ $invoice_id }}">
            <input type="hidden" name="number_of_days" value="{{ $number_of_days }}">
            <input type="hidden" name="start_date" value="{{ $start_date }}">
            <input type="hidden" name="return_date" value="{{ $return_date }}">
            
            <!--begin::Aside column-->
            <div class="w-100 d-flex flex-column gap-4 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">

                <!--begin::Order details-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Order Details</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="d-flex flex-column gap-1">
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <label class="form-label">Invoice ID</label>
                                <!--end::Label-->

                                <!--begin::Auto-generated ID-->
                                <div class="fw-bold fs-3">#{{ $invoice_id }}</div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <div class="fw-bold mt-5">Number of Days</div>
                                <!--end::Label-->

                                <!--begin::Auto-generated ID-->
                                <div class="fw-bold fs-3">{{ $number_of_days }}</div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <div class="fw-bold mt-5">Start Date</div>
                                <!--end::Label-->

                                <!--begin::Auto-generated ID-->
                                <div class="text-gray-600">{{ Carbon\Carbon::parse($start_date)->format('d M, Y') }}</div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <div class="fw-bold mt-5">End Date</div>
                                <!--end::Label-->

                                <!--begin::Auto-generated ID-->
                                <div class="text-gray-600">{{ Carbon\Carbon::parse($return_date)->format('d M, Y') }}</div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                        </div>
                    </div>
                    <!--end::Card header-->

                </div>
                <!--end::Order details-->

                <!--begin::Card-->
                <div class="card mb-5 mb-xl-8">
                    <!--begin::Card body-->
                    <div class="card-body pt-8">
                        <!--begin::Details toggle-->
                        <div class="d-flex flex-stack fs-4 py-3">
                            <h2>Customer Details</h2>
                        </div>
                        <!--end::Details toggle-->

                        <div class="separator separator-dashed my-3"></div>

                        <!--begin::Details content-->
                        <div class="pb-5 fs-6">
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Name</div>
                            <div class="text-gray-600">{{ $customer->name }}</div>
                            <!--begin::Details item-->
                            @if ($customer->company)
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Company</div>
                                <div class="text-gray-600">{{ $customer->company }}</div>
                                <!--begin::Details item-->
                            @endif
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Account ID</div>
                            <div class="text-gray-600">ID-{{ $customer->id }}</div>
                            <!--begin::Details item-->
                            @if ($customer->email)
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Email</div>
                            <div class="text-gray-600"><a href="#"
                                    class="text-gray-600 text-hover-primary">{{ $customer->email }}</a></div>
                            <!--begin::Details item-->
                            @endif
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Phone Number</div>
                            <div class="text-gray-600">{{ $customer->phone_number }}</div>
                            <!--begin::Details item-->
                            @if ($customer->address)
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Address</div>
                            <div class="text-gray-600">
                                @foreach (explode(',', $customer->address) as $address)
                                    {{ $address }},<br>
                                @endforeach
                            </div>
                            <!--begin::Details item-->
                            @endif
                        </div>
                        <!--end::Details content-->
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Card-->
                
            </div>
            <!--end::Aside column-->

            <!--begin::Main column-->
            <div class="d-flex flex-column flex-lg-row-fluid gap-7 gap-lg-10">

                <!--begin::Order details-->
                <div class="card card-flush py-4">
                    <!--begin::Card header-->
                    <div class="card-header">
                        <div class="card-title">
                            <h2>Select Products</h2>
                        </div>
                    </div>
                    <!--end::Card header-->

                    <!--begin::Card body-->
                    <div class="card-body pt-0">
                        <div class="d-flex flex-column gap-10">
                            <div id="product_table_wrapper" class="d-none">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr class="fw-bold fs-6 text-gray-800">
                                                <th>Name</th>
                                                <th>SKU</th>
                                                <th>Quantity</th>
                                                <th class="text-end">Total Rent</th>
                                            </tr>
                                        </thead>
                                        <tbody id="product_row_wrapper">
                                        </tbody>
                                        <tfoot id="product_footer">
                                            <tr class="border-top border-gray-200">
                                                <td colspan="3" class="text-end">Grand Total</td>
                                                <td id="grandTotalRow" class="text-end">0</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="d-flex justify-content-end mt-3">
                                    <!--begin::Button-->
                                    <a href="{{ route('admin.rentals') }}" id="kt_ecommerce_edit_order_cancel" class="btn btn-light me-5">
                                        Cancel
                                    </a>
                                    <!--end::Button-->
                        
                                    <!--begin::Button-->
                                    <button type="submit" id="kt_ecommerce_edit_order_submit" class="btn btn-primary">
                                        <span class="indicator-label">
                                            Place Orders
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Button-->
                                </div>                               
                            </div>
                            <!--begin::Separator-->
                            <div class="separator"></div>
                            <!--end::Separator-->

                            <!--begin::Search products-->
                            <div class="d-flex align-items-center position-relative mb-n7 ">
                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span
                                        class="path1"></span><span class="path2"></span></i> <input type="text"
                                    data-kt-ecommerce-edit-order-filter="search"
                                    class="form-control form-control-solid w-100 w-lg-50 ps-12"
                                    placeholder="Search Products" />
                            </div>
                            <!--end::Search products-->

                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                id="kt_ecommerce_edit_order_product_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px">Product</th>
                                        <th class="min-w-200px">Qty Remaining</th>
                                        <th class="min-w-100px">Order Qty</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"
                                                data-kt-ecommerce-edit-order-filter="product"
                                                data-kt-ecommerce-edit-order-id="product_1">
                                                <!--begin::Thumbnail-->
                                                <a href="../catalog/edit-product.html" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url({{ asset('storage').'/'.$product->image }});"></span>
                                                </a>
                                                <!--end::Thumbnail-->

                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="../catalog/edit-product.html"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $product->name }}</a>
                                                    <!--end::Title-->

                                                    <!--begin::Price-->
                                                    <div class="fw-semibold fs-7 lan-ban">Rent: ৳<span
                                                            data-kt-ecommerce-edit-order-filter="price">{{ $product->rental_price }}</span></div>
                                                    <!--end::Price-->

                                                    <!--begin::SKU-->
                                                    <div class="text-muted fs-7">SKU: {{ $product->product_code }}</div>
                                                    <!--end::SKU-->
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($product->stock < 3)
                                            <span class="badge badge-light-warning">Low stock</span>
                                            <span class="fw-bold text-warning ms-3">{{ $product->stock }}</span>
                                            @else
                                            {{ $product->stock }}
                                            @endif
                                        </td>
                                        <td>
                                            <input type="number" onchange="collectProduct(this, {{ json_encode($product) }}, {{ $number_of_days }})" max="{{ $product->stock }}" class="form-control form-control-sm form-control-solid" value="0"/>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end::Table-->
                        </div>
                    </div>
                    <!--end::Card header-->
                </div>
                <!--end::Order details-->
            </div>
            <!--end::Main column-->
        </form>
        <!--end::Form-->
    </div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
@endsection

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/sales/save-order.js') }}"></script>
    <script>
        function collectProduct(productInput, product, numberOfDays = 1){
            const productRowWrapper = document.getElementById('product_row_wrapper');
            const productTableWrapper = document.getElementById('product_table_wrapper');
            const grandTotalRow = document.getElementById('grandTotalRow');

            // check if the input value is greater than the stock
            if(productInput.value > product.stock){
                productInput.value = product.stock;
            }
            const totalRent = productInput.value * product.rental_price * numberOfDays;

            // if the input value is graeter than 0 then show the table
            if(productInput.value > 0){
                productTableWrapper.classList.remove('d-none');
                // check if any row exists with the same product id
                const productRow = document.getElementById('product_row_'+product.id);
                // if it does not exist then create a new row
                if(!productRow){
                    const productRow = document.createElement('tr');
                    productRow.id = 'product_row_'+product.id;

                    productRow.innerHTML = `
                        <td>${product.name}</td>
                        <td>${product.product_code}</td>
                        <td>
                            ${productInput.value}
                            <input type="hidden" id="productInput${product.id}" name="products[${product.id}][quantity]" value="${productInput.value}">
                        </td>
                        <td class="text-end">${totalRent}</td>
                    `;
                    productRowWrapper.appendChild(productRow);

                }else{
                    // if it exists then update the quantity
                    const productQuantity = productRow.children[2];
                    const productTotalRent = productRow.children[3];
                    const productRowInput = document.getElementById('productInput'+product.id);

                    productQuantity.innerHTML = `${productInput.value} <input type="hidden" id="productInput${product.id}" name="products[${product.id}][quantity]" value="${productInput.value}">`;
                    productTotalRent.innerText = totalRent;
                }
            }else if(productInput.value == 0){
                // if the input value is 0 then remove the row
                const productRow = document.getElementById('product_row_'+product.id);
                productRow.remove();
            }

            // calculate the grand total
                let grandTotal = 0;
                const productRows = productRowWrapper.children;
            for(let i = 0; i < productRows.length; i++){
                const productTotalRent = productRows[i].children[3];
                grandTotal += parseInt(productTotalRent.innerText);
            }
            grandTotalRow.innerText = grandTotal;

            // if no row exists then hide the table
            if(productRows.length == 0){
                productTableWrapper.classList.add('d-none');
            }
        }
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
