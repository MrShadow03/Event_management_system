@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Products Reporting | Admin</title>
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
            <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Products
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
                <li class="breadcrumb-item text-muted">Products</li>
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
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4"><span class="path1"></span><span class="path2"></span></i><input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product">
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
    
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
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
                        <th class="min-w-100px">Product</th>
                        <th class="text-end">Category</th>
                        <th class="text-end">Code</th>
                        <th class="text-end">Stock</th>
                        <th class="text-end">Rent Cost</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @forelse ($products as $product)
                    <tr>
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <img src="{{ asset('storage'.'/'.$product->image) }}" alt="{{ $product->name }} image" loading="lazy" />
                                </a>
                                <!--end::Thumbnail-->
        
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <span class="text-gray-800 fs-6 fw-bold" data-kt-ecommerce-product-filter="product_name">{{ $product->name }}</span>
                                    <p class="text-gray-500 fs-12">{{ $product->dimension }}</p>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span class="font-bn">{{ $product->category->name }}</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>{{ $product->product_code }}</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>{{ $product->stock }}</span>
                        </td>
                        <td class="text-end pe-0">{{ $product->rental_price }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="8" class="text-center text-danger">No products found!</td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                        <td class="text-center"></td>
                    </tr>
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
    <script src="{{ asset('/assets/admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
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
                    'columnDefs': [
                        { render: DataTable.render.number(',', '.', 2), targets: 4},
                        { orderable: false, targets: 0 }, // Disable ordering on column 0 (checkbox)
                    ],
                    dom: 'Bfrtip',
                    buttons: [
                        'copyHtml5',
                        'excelHtml5',
                        'pdfHtml5'
                    ]
        });
        // Class definition
        var KTAppEcommerceProducts = function () {
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-ecommerce-product-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }

            // Handle status filter dropdown
            var handleCategoryFilter = () => {
                const filterStatus = document.querySelector('[data-product-filter="category"]');
                $(filterStatus).on('change', e => {
                    let value = e.target.value;
                    if(value === 'all'){
                        value = '';
                    }
                    console.log(value);
                    datatable.column(1).search(value ? '^' + value + '$' : '', true, false).draw();
                });
            }

            // Delete category
            var handleDeleteRows = () => {
                // Select all delete buttons
                const deleteButtons = table.querySelectorAll('[data-kt-ecommerce-product-filter="delete_row"]');

                deleteButtons.forEach(d => {
                    // Delete button on click
                    d.addEventListener('click', function (e) {
                        e.preventDefault();

                        // Select parent row
                        const parent = e.target.closest('tr');

                        // Get category name
                        const productName = parent.querySelector('[data-kt-ecommerce-product-filter="product_name"]').innerText;

                        // SweetAlert2 pop up --- official docs reference: https://sweetalert2.github.io/
                        Swal.fire({
                            text: "Are you sure you want to archive " + productName + "?",
                            icon: "warning",
                            showCancelButton: true,
                            buttonsStyling: false,
                            confirmButtonText: "Yes, archive!",
                            cancelButtonText: "No, cancel",
                            customClass: {
                                confirmButton: "btn fw-bold btn-danger",
                                cancelButton: "btn fw-bold btn-active-light-primary"
                            }
                        }).then(function (result) {
                            if (result.value) {
                                Swal.fire({
                                    text: "You have archived " + productName + "!.",
                                    icon: "success",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                }).then(function () {
                                    // get the product id from data-product-id
                                    const productId = parent.querySelector('[data-product-id]').getAttribute('data-product-id');
                                    // send to the delete route
                                    window.location.href = `/admin/product/archive/${productId}`;
                                });
                            } else if (result.dismiss === 'cancel') {
                                Swal.fire({
                                    text: productName + " was not archived.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn fw-bold btn-primary",
                                    }
                                });
                            }
                        });
                    })
                });
            }


            // Public methods
            return {
                init: function () {
                    if (!table) {
                        return;
                    }

                    // initDatatable();
                    handleSearchDatatable();
                    handleCategoryFilter();
                    handleDeleteRows();
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

            console.log(dtButtons)
            if(dtButtons.classList.contains('d-none')){
                dtButtons.classList.remove('d-none');
            }else{
                dtButtons.classList.add('d-none');
            }
            
        }

    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
