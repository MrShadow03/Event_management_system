@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>{{ $customer->name }}'s New Rental | Admin</title>
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
            <input type="hidden" name="venue" value="{{ $venue }}">
            <input type="hidden" id="customerDepositInput" name="deposit" value="{{ $customer->deposit }}">
            
            <!--begin::Aside column-->
            <div class="w-100 d-flex flex-column gap-8 flex-lg-row-auto w-lg-300px mb-7 me-7 me-lg-10">

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
                            @if($venue)
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <div class="fw-bold mt-5">Venue</div>
                                <!--end::Label-->

                                <!--begin::Auto-generated ID-->
                                <div class="text-gray-600">{{ $venue }}</div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            @endif
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
                            <div class="fw-bold mt-5">Deposit</div>
                            <div class="text-gray-600">{{ $customer->deposit }}</div>
                            <!--begin::Details item-->
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
                            <div class="d-flex justify-content-between gap-3">
                                <!--begin::Search products-->
                                <div class="d-flex align-items-center position-relative w-300px">
                                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <input type="text"
                                        data-kt-ecommerce-edit-order-filter="search"
                                        class="form-control form-control-solid w-100 ps-12"
                                        placeholder="Search Products" />
                                </div>
                                <!--end::Search products-->
                                <div class="w-100 mw-150px">
                                    <!--begin::Select2-->
                                    <select class="form-select form-select-solid font-bn" data-control="select2" data-hide-search="true" data-placeholder="Category" data-product-filter="category">
                                        <option></option>
                                        <option value="all">All</option>
                                        @foreach ($products->unique('category_id') as $product)
                                            <option value="{{ $product->category->name }}">{{ $product->category->name }}</option>
                                        @endforeach
                                    </select>
                                    <!--end::Select2-->
                                </div>
                            </div>

                            <!--begin::Table-->
                            <table class="table align-middle table-row-dashed fs-6 gy-5"
                                id="kt_ecommerce_edit_order_product_table">
                                <thead>
                                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                        <th class="min-w-200px">Product</th>
                                        <th class="min-w-200px">Cat</th>
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
                                                <a href="javascript:void(0);" class="symbol symbol-50px">
                                                    <img src="{{ asset('storage').'/'.$product->image }}" alt="{{ $product->name }}" loading="lazy">
                                                </a>
                                                <!--end::Thumbnail-->

                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="javascript:void(0);"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $product->name }}</a>
                                                    <!--end::Title-->

                                                    <!--begin::Price-->
                                                    <div class="fw-semibold fs-7 lan-ban">Rent: ৳<span
                                                            data-kt-ecommerce-edit-order-filter="price">{{ $product->rental_price }}</span></div>
                                                    <!--end::Price-->

                                                    <!--begin::SKU-->
                                                    <div class="text-muted fs-7">SKU: {{ $product->product_code }}</div>
                                                    <!--end::SKU-->

                                                    @if ($product->dimension || $product->color)
                                                    <!--begin::Dimension & Color-->
                                                    <div class="text-muted fs-7">{{ $product->dimension }} {{ $product->color ? '| '.$product->color : '' }}</div>
                                                    <!--end::Dimension & Color-->
                                                    @endif
                                                </div>
                                            </div>
                                        </td>
                                        <td class="font-bn">{{ $product->category->name }}</td>
                                        <td>
                                            @if ($product->stock < 3)
                                            <span class="badge badge-light-warning">Low stock</span>
                                            <span class="fw-bold text-warning ms-3">{{ $product->stock }}</span>
                                            @else
                                            {{ $product->stock }}
                                            @endif
                                        </td>
                                        <td>
                                            <input type="number" oninput="collectProduct(this, {{ json_encode($product) }}, {{ $number_of_days }})" min="0" max="{{ $product->stock }}" class="form-control form-control-sm form-control-solid" value="0"/>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!--end::Table-->

                            <!--begin::Separator-->
                            <div class="separator"></div>
                            <!--end::Separator-->

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
                                                <td colspan="3" class="text-end">Sub Total</td>
                                                <td id="subTotalRow" class="text-end">0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end">Discount (TK)</td>
                                                <td class="text-end" id="discountRow">
                                                    <input id="discountInput" oninput="calculateGrandTotal()" class="form-control form-control-sm" type="number" min="0" name="discount" value="0">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end">VAT (%)</td>
                                                <td class="text-end" id="vatPercentageRow">
                                                    <input id="vatPercentageInput" oninput="calculateGrandTotal()" class="form-control form-control-sm" type="number" min="0" name="vat_percentage" value="{{ $commonDetails['product_VAT'] }}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="border-top border-gray-200 text-end">Grand Total</td>
                                                <td id="grandTotalRow" class="text-end">0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end">Payable from Deposit(TK)</td>
                                                <td class="text-end" id="paidRow">
                                                    <input id="paidInput" oninput="calculateGrandTotal()" class="form-control form-control-sm" type="number" min="0" name="paid" value="0" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="3" class="text-end">Due (TK)</td>
                                                <td class="text-end" id="dueRow">
                                                    <input id="dueInput" oninput="calculateGrandTotal()" class="form-control form-control-sm" type="number" min="0" name="due" value="0" readonly>
                                                </td>
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
                                            Proceed
                                        </span>
                                        <span class="indicator-progress">
                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                        </span>
                                    </button>
                                    <!--end::Button-->
                                </div>                               
                            </div>
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
    <script>
        
        function collectProduct(productInput, product, numberOfDays = 1){
            const productRowWrapper = document.getElementById('product_row_wrapper');
            const productTableWrapper = document.getElementById('product_table_wrapper');
            const subTotalRow = document.getElementById('subTotalRow');

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
            let subTotal = 0;
            const productRows = productRowWrapper.children;

            for(let i = 0; i < productRows.length; i++){
                const productTotalRent = productRows[i].children[3];
                subTotal += parseInt(productTotalRent.innerText);
            }

            subTotalRow.innerHTML = `${subTotal} <input type="hidden" id="subTotalInput" name="subtotal" value="${subTotal}">`;

            calculateGrandTotal();

            // if no row exists then hide the table
            if(productRows.length == 0){
                productTableWrapper.classList.add('d-none');
            }
        }

        function calculateGrandTotal(){
            const subTotalInput = document.getElementById('subTotalInput');
            const vatPercentageInput = document.getElementById('vatPercentageInput');
            // const paidInput = document.getElementById('paidInput');
            const discountInput = document.getElementById('discountInput');
            const grandTotalRow = document.getElementById('grandTotalRow');
            const dueRow = document.getElementById('dueRow');

            const subTotal = parseInt(subTotalInput.value) || 0;
            const vatPercentage = parseInt(vatPercentageInput.value) || 0;
            // const paid = parseInt(paidInput.value) || 0;
            const discount = parseInt(discountInput.value) || 0;
            
            const discountedSubtotal = subTotal - discount;
            const grandTotal = Math.round(discountedSubtotal + (discountedSubtotal * vatPercentage / 100));
            const paid = calculatePaid(grandTotal);
            const due = grandTotal - paid;

            grandTotalRow.innerHTML = `${grandTotal} <input type="hidden" id="grandTotalInput" name="grand_total" value="${grandTotal}">`;
            dueRow.innerHTML = `${due} <input type="hidden" id="dueInput" name="due" value="${due}">`;
        }

        function calculatePaid(grandTotal){
            const customerDeposit = parseInt(document.getElementById('customerDepositInput').value) || 0;
            const paidInput = document.getElementById('paidInput');
            const payable = customerDeposit < grandTotal ? customerDeposit : grandTotal;
            paidInput.value = payable;

            return payable;
        }
        // Class definition
        var KTAppEcommerceSalesSaveOrder = function () {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            const initSaveOrder = () => {
                table = document.querySelector('#kt_ecommerce_edit_order_product_table');
                datatable = $(table).DataTable({
                    "info": false,
                    'order': [],
                    "pageLength": 5,
                    "lenghtMenu": [5, 10, 25, 50],
                    "lengthChange": true,
                    'columnDefs': [
                        { orderable: false, targets: 0 }, // Disable ordering on column 0 (checkbox)
                    ]
                });
            }

            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-ecommerce-edit-order-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Handle status filter dropdown
            var handleStatusFilter = () => {
                const filterStatus = document.querySelector('[data-product-filter="category"]');
                $(filterStatus).on('change', e => {
                    let value = e.target.value;
                    if(value === 'all'){
                        value = '';
                    }
                    datatable.column(1).search(value ? '^' + value + '$' : '', true, false).draw();
                });
            }


            // Public methods
            return {
                init: function () {
                    initSaveOrder();
                    handleSearchDatatable();
                    handleStatusFilter();
                }
            };
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTAppEcommerceSalesSaveOrder.init();
        });
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
