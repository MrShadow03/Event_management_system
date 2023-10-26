@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Dispatch Orders | Admin</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dispatch Orders
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
                    <li class="breadcrumb-item text-muted">Dispatch</li>
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
        <div class="form d-flex flex-column flex-lg-row">
            
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
                                <div class="fw-bold fs-3">
                                    #{{ $invoice->id }}
                                    {{-- <span class="badge badge-info">Ready for Return</span> --}}
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <div class="fw-bold mt-5">Number of Days</div>
                                <!--end::Label-->

                                <!--begin::Auto-generated ID-->
                                <div class="fw-bold fs-3">{{ $invoice->rentals->first()->number_of_days }}</div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row">
                                <!--begin::Label-->
                                <div class="fw-bold mt-5">Order Start Date</div>
                                <!--end::Label-->

                                <!--begin::Auto-generated ID-->
                                <div class="text-gray-600">
                                    {{ Carbon\Carbon::parse($invoice->rentals->first()->starting_date)->format('d M, Y') }}
                                    <span class="badge badge-info ms-2">{{ Carbon\Carbon::parse($invoice->rentals->first()->starting_date)->diffForHumans() }}</span>
                                </div>
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
                            <div class="text-gray-600">{{ $invoice->customer->name }}</div>
                            <!--begin::Details item-->
                            @if ($invoice->customer->company)
                                <!--begin::Details item-->
                                <div class="fw-bold mt-5">Company</div>
                                <div class="text-gray-600">{{ $invoice->customer->company }}</div>
                                <!--begin::Details item-->
                            @endif
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Account ID</div>
                            <div class="text-gray-600">ID-{{ $invoice->customer->id }}</div>
                            <!--begin::Details item-->
                            @if ($invoice->customer->email)
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Email</div>
                            <div class="text-gray-600"><a href="#"
                                    class="text-gray-600 text-hover-primary">{{ $invoice->customer->email }}</a></div>
                            <!--begin::Details item-->
                            @endif
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Phone Number</div>
                            <div class="text-gray-600">{{ $invoice->customer->phone_number }}</div>
                            <!--begin::Details item-->
                            @if ($invoice->customer->address)
                            <!--begin::Details item-->
                            <div class="fw-bold mt-5">Address</div>
                            <div class="text-gray-600">
                                @foreach (explode(',', $invoice->customer->address) as $address)
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
                                        <th>Order ID</th>
                                        <th>SKU</th>
                                        <th>Qty</th>
                                        <th class="min-w-200px text-end">Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="fw-semibold text-gray-600">
                                    @foreach ($invoice->rentals as $rental)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center"
                                                data-kt-ecommerce-edit-order-filter="product"
                                                data-kt-ecommerce-edit-order-id="product_1">
                                                <!--begin::Thumbnail-->
                                                <a href="javascript:void(0);" class="symbol symbol-50px">
                                                    <span class="symbol-label"
                                                        style="background-image:url({{ asset('storage').'/'.$rental->product->image }});"></span>
                                                </a>
                                                <!--end::Thumbnail-->

                                                <div class="ms-5">
                                                    <!--begin::Title-->
                                                    <a href="javascript:void(0);"
                                                        class="text-gray-800 text-hover-primary fs-5 fw-bold">{{ $rental->product->name }}</a>
                                                    <!--end::Title-->

                                                    <!--begin::Price-->
                                                    <div class="fw-semibold fs-7 lan-ban">Rent: ৳<span
                                                            data-kt-ecommerce-edit-order-filter="price">{{ $rental->product->rental_price }}</span></div>
                                                    <!--end::Price-->
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="fw-bold fs-6">#{{ $rental->id }}</div>
                                        </td>
                                        <td>
                                            <div class="fw-bold fs-6">{{ $rental->product->product_code }}</div>
                                        </td>
                                        <td>
                                            <div class="fw-bold fs-6">{{ $rental->quantity }}</div>
                                        </td>
                                        <td class="text-end">
                                            <div class="d-flex gap-2 justify-content-end">
                                                <a href="{{ route('admin.rentals.dispatch.update', $rental->id) }}" class="btn btn-sm btn-success">
                                                    <i class="ki-duotone ki-delivery fs-1">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                    Dispatch
                                                </a>
                                            </div>
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
        </div>
        <!--end::Form-->
    </div>
@endsection
<!--end::Main Content-->

<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script>
        // Class definition
        var KTAppEcommerceSalesSaveOrder = function () {
            // Shared variables
            var table;
            var datatable;

            // Private functions
            const initSaveOrder = () => {

                // Init flatpickr
                $('#kt_ecommerce_edit_order_date').flatpickr({
                    altInput: true,
                    altFormat: "d F, Y",
                    dateFormat: "Y-m-d",
                });

                // Init select2 country options
                // Format options
                const optionFormat = (item) => {
                    if ( !item.id ) {
                        return item.text;
                    }

                    var span = document.createElement('span');
                    var template = '';

                    template += '<img src="' + item.element.getAttribute('data-kt-select2-country') + '" class="rounded-circle h-20px me-2" alt="image"/>';
                    template += item.text;

                    span.innerHTML = template;

                    return $(span);
                }

                // Init Select2 --- more info: https://select2.org/        
                $('#kt_ecommerce_edit_order_billing_country').select2({
                    placeholder: "Select a country",
                    minimumResultsForSearch: Infinity,
                    templateSelection: optionFormat,
                    templateResult: optionFormat
                });

                $('#kt_ecommerce_edit_order_shipping_country').select2({
                    placeholder: "Select a country",
                    minimumResultsForSearch: Infinity,
                    templateSelection: optionFormat,
                    templateResult: optionFormat
                });

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                table = document.querySelector('#kt_ecommerce_edit_order_product_table');
                datatable = $(table).DataTable({
                    'order': [],
                    "scrollY": "400px",
                    "scrollCollapse": true,
                    "paging": false,
                    "info": false,
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

            // Handle shipping form
            const handleShippingForm = () => {
                // Select elements
                const element = document.getElementById('kt_ecommerce_edit_order_shipping_form');
                const checkbox = document.getElementById('same_as_billing');

                // Show/hide shipping form
                checkbox.addEventListener('change', e => {
                    if (e.target.checked) {
                        element.classList.add('d-none');
                    } else {
                        element.classList.remove('d-none');
                    }
                });
            }

            // Handle product select
            const handleProductSelect = () => {
                // Define variables
                const checkboxes = table.querySelectorAll('[type="checkbox"]');
                const target = document.getElementById('kt_ecommerce_edit_order_selected_products');
                const totalPrice = document.getElementById('kt_ecommerce_edit_order_total_price');

                // Loop through all checked products
                checkboxes.forEach(checkbox => {
                    checkbox.addEventListener('change', e => {
                        // Select parent row element
                        const parent = checkbox.closest('tr');
                        
                        // Clone parent element as variable
                        const product = parent.querySelector('[data-kt-ecommerce-edit-order-filter="product"]').cloneNode(true);

                        // Create inner wrapper
                        const innerWrapper = document.createElement('div');
                        
                        // Store inner content
                        const innerContent = product.innerHTML;

                        // Add & remove classes on parent wrapper
                        const wrapperClassesAdd = ['col', 'my-2'];
                        const wrapperClassesRemove = ['d-flex', 'align-items-center'];

                        // Define additional classes
                        const additionalClasses = ['border', 'border-dashed', 'rounded', 'p-3', 'bg-body'];

                        // Update parent wrapper classes
                        product.classList.remove(...wrapperClassesRemove);
                        product.classList.add(...wrapperClassesAdd);

                        // Remove parent default content
                        product.innerHTML = '';

                        // Update inner wrapper classes
                        innerWrapper.classList.add(...wrapperClassesRemove);
                        innerWrapper.classList.add(...additionalClasses);                

                        // Apply stored inner content into new inner wrapper
                        innerWrapper.innerHTML = innerContent;

                        // Append new inner wrapper to parent wrapper
                        product.appendChild(innerWrapper);

                        // Get product id
                        const productId = product.getAttribute('data-kt-ecommerce-edit-order-id');

                        if (e.target.checked) {
                            // Add product to selected product wrapper
                            target.appendChild(product);
                        } else {
                            // Remove product from selected product wrapper
                            const selectedProduct = target.querySelector('[data-kt-ecommerce-edit-order-id="' + productId + '"]');
                            if (selectedProduct) {
                                target.removeChild(selectedProduct);
                            }
                        }

                        // Trigger empty message logic
                        detectEmpty();
                    });
                });

                // Handle empty list message
                const detectEmpty = () => {
                    // Select elements
                    const message = target.querySelector('span');
                    const products = target.querySelectorAll('[data-kt-ecommerce-edit-order-filter="product"]');

                    // Detect if element is empty
                    if (products.length < 1) {
                        // Show message
                        message.classList.remove('d-none');

                        // Reset price
                        totalPrice.innerText = '0.00';
                    } else {
                        // Hide message
                        message.classList.add('d-none');

                        // Calculate price
                        calculateTotal(products);
                    }
                }

                // Calculate total cost
                const calculateTotal = (products) => {
                    let countPrice = 0;

                    // Loop through all selected prodcucts
                    products.forEach(product => {
                        // Get product price
                        const price = parseFloat(product.querySelector('[data-kt-ecommerce-edit-order-filter="price"]').innerText);

                        // Add to total
                        countPrice = parseFloat(countPrice + price);
                    });

                    // Update total price
                    totalPrice.innerText = countPrice.toFixed(2);
                }
            }

            // Submit form handler
            const handleSubmit = () => {
                // Define variables
                let validator;

                // Get elements
                const form = document.getElementById('kt_ecommerce_edit_order_form');
                const submitButton = document.getElementById('kt_ecommerce_edit_order_submit');

                // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
                validator = FormValidation.formValidation(
                    form,
                    {
                        fields: {
                            'payment_method': {
                                validators: {
                                    notEmpty: {
                                        message: 'Payment method is required'
                                    }
                                }
                            },
                            'shipping_method': {
                                validators: {
                                    notEmpty: {
                                        message: 'Shipping method is required'
                                    }
                                }
                            },
                            'order_date': {
                                validators: {
                                    notEmpty: {
                                        message: 'Order date is required'
                                    }
                                }
                            },
                            'billing_order_address_1': {
                                validators: {
                                    notEmpty: {
                                        message: 'Address line 1 is required'
                                    }
                                }
                            },
                            'billing_order_postcode': {
                                validators: {
                                    notEmpty: {
                                        message: 'Postcode is required'
                                    }
                                }
                            },
                            'billing_order_state': {
                                validators: {
                                    notEmpty: {
                                        message: 'State is required'
                                    }
                                }
                            },
                            'billing_order_country': {
                                validators: {
                                    notEmpty: {
                                        message: 'Country is required'
                                    }
                                }
                            }
                        },
                        plugins: {
                            trigger: new FormValidation.plugins.Trigger(),
                            bootstrap: new FormValidation.plugins.Bootstrap5({
                                rowSelector: '.fv-row',
                                eleInvalidClass: '',
                                eleValidClass: ''
                            })
                        }
                    }
                );

                // Handle submit button
                submitButton.addEventListener('click', e => {
                    e.preventDefault();

                    // Validate form before submit
                    if (validator) {
                        validator.validate().then(function (status) {
                            console.log('validated!');

                            if (status == 'Valid') {
                                submitButton.setAttribute('data-kt-indicator', 'on');

                                // Disable submit button whilst loading
                                submitButton.disabled = true;

                                setTimeout(function () {
                                    submitButton.removeAttribute('data-kt-indicator');

                                    Swal.fire({
                                        text: "Form has been successfully submitted!",
                                        icon: "success",
                                        buttonsStyling: false,
                                        confirmButtonText: "Ok, got it!",
                                        customClass: {
                                            confirmButton: "btn btn-primary"
                                        }
                                    }).then(function (result) {
                                        if (result.isConfirmed) {
                                            // Enable submit button after loading
                                            submitButton.disabled = false;

                                            // Redirect to customers list page
                                            window.location = form.getAttribute("data-kt-redirect");
                                        }
                                    });
                                }, 2000);
                            } else {
                                Swal.fire({
                                    html: "Sorry, looks like there are some errors detected, please try again.",
                                    icon: "error",
                                    buttonsStyling: false,
                                    confirmButtonText: "Ok, got it!",
                                    customClass: {
                                        confirmButton: "btn btn-primary"
                                    }
                                });
                            }
                        });
                    }
                })
            }


            // Public methods
            return {
                init: function () {
                    initSaveOrder();
                    handleSearchDatatable();
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
