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
            <!--begin::Primary button-->
            <a href="#" class="btn btn-sm btn-flex bg-body btn-color-gray-700 btn-active-color-primary fw-bold" id="kt_drawer_chat_toggle">
                <i class="ki-duotone ki-burger-menu-5 fs-6 text-muted me-1">
                </i>
                Categories
            </a>
            <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#modal_new_product">Add Product</a>
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
                <div class="w-100 mw-150px">
                    <!--begin::Select2-->
                    <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                        <option></option>
                        <option value="all">All</option>
                        <option value="inactive">Inactive</option>
                        <option value="active">Active</option>
                    </select>
                    <!--end::Select2-->
                </div>
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                <thead>
                    <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                        {{-- <th class="w-10px pe-2">
                            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1">
                            </div>
                        </th> --}}
                        <th class="min-w-100px">Product</th>
                        <th class="text-end">Category</th>
                        <th class="text-end">Code</th>
                        <th class="text-end">Stock</th>
                        <th class="text-end">Rent Cost</th>
                        <th class="text-end">Status</th>
                        <th class="text-end">Toggle Status</th>
                        <th class="text-end">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @forelse ($products as $product)
                    <tr>
                        {{-- <td>
                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="1">
                            </div>
                        </td> --}}
                        <td>
                            <div class="d-flex align-items-center">
                                <!--begin::Thumbnail-->
                                <a href="#" class="symbol symbol-50px">
                                    <span class="symbol-label" style="background-image:url({{ asset('storage'.'/'.$product->image) }});"></span>
                                </a>
                                <!--end::Thumbnail-->
        
                                <div class="ms-5">
                                    <!--begin::Title-->
                                    <span class="text-gray-800 fs-6 fw-bold" data-kt-ecommerce-product-filter="product_name">{{ $product->name }}</span>
                                    <p class="text-gray-500 fs-12">{{ $product->dimension }} feet</p>
                                    <!--end::Title-->
                                </div>
                            </div>
                        </td>
                        <td class="text-end pe-0">
                            <span>{{ $product->category->name }}</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>{{ $product->product_code }}</span>
                        </td>
                        <td class="text-end pe-0">
                            <span>{{ $product->stock }}</span>
                        </td>
                        <td class="text-end pe-0">{{ $product->rental_price }}</td>
                        {{-- <td class="text-end pe-0" data-order="rating-4">
                            <div class="rating justify-content-end">
                                <div class="rating-label checked"><i class="ki-duotone ki-star fs-6"></i></div>
                                <div class="rating-label checked"><i class="ki-duotone ki-star fs-6"></i></div>
                                <div class="rating-label checked"><i class="ki-duotone ki-star fs-6"></i></div>
                                <div class="rating-label checked"><i class="ki-duotone ki-star fs-6"></i></div>
                                <div class="rating-label "><i class="ki-duotone ki-star fs-6"></i></div>
                            </div>
                        </td> --}}
                        @if ($product->status)
                        <td class="text-end pe-0" data-search="active">
                            <!--begin::Badges-->                    
                            <div class="badge badge-light-success">Active</div>
                            <!--end::Badges-->
                        </td>
                        @else
                        <td class="text-end pe-0" data-search="inactive">
                            <!--begin::Badges-->                    
                            <div class="badge badge-light-danger">Inactive</div>
                            <!--end::Badges-->
                        </td>
                        @endif
                        <td class="text-end">
                            <form class="form-check form-switch d-flex justify-content-end" title="Some info about it's function!" action="{{ route('admin.product.change-status', $product->id) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <input class="form-check-input cursor-pointer h-20px w-30px" type="checkbox" role="switch" id="flexSwitchCheckChecked" @checked($product->status) onchange="this.form.submit()">
                            </form>
                        </td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" onclick="inputProductData({{ json_encode($product) }}, '{{ asset('storage') }}')">
                                Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i>
                            </a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#modal_update_product" class="menu-link px-3">
                                        Edit
                                    </a>
                                </div>
                                <!--end::Menu item-->
                                
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="{{ route('admin.product.archive', $product->id) }}" class="menu-link px-3" data-product-id="{{ $product->id }}" data-kt-ecommerce-product-filter="delete_row">
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

@section('exclusive_modals')
    <!--begin::Category new modal-->
    <div class="modal fade" id="category_new_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h3 class="mb-3">New Category</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-text-number fs-1">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                        <i class="path3"></i>
                                        <i class="path4"></i>
                                        <i class="path5"></i>
                                        <i class="path6"></i>
                                    </i>
                                </span>
                                <input type="text" name="name" class="form-control form-control-solid" placeholder="E.g Planning" />
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Category Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Image for the single project section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-150px" style="background-image: url({{ asset('/assets/admin/assets/media/placeholder/banner.webp') }}); background-position: 50% 50%;">
                                    </div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change Category image">
                                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                class="path2"></span></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Cancel Category image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove Category image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->

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
    <!--end::Category new modal-->
    <!--begin::Category update modal-->
    <div class="modal fade" id="category_update_modal" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.category.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="editCategoryId">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h3 class="mb-3">Update Category</h3>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <div class="input-group input-group-solid">
                                <span class="input-group-text" id="basic-addon1">
                                    <i class="ki-duotone ki-text-number fs-1">
                                        <i class="path1"></i>
                                        <i class="path2"></i>
                                        <i class="path3"></i>
                                        <i class="path4"></i>
                                        <i class="path5"></i>
                                        <i class="path6"></i>
                                    </i>
                                </span>
                                <input type="text" name="name" id="editCategoryName" class="form-control form-control-solid" placeholder="E.g Architechture" />
                            </div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Category Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Image for the single project section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-150px" id="editCategoryImagePreview" style="background-image: url({{ asset('/assets/admin/assets/media/placeholder/banner.webp') }}); background-position: 50% 50%;">
                                    </div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change Category image">
                                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                class="path2"></span></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Cancel Category image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove Category image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->

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
    <!--end::Category update modal-->
    <!--begin::Page new modal-->
    <div class="modal fade" id="modal_new_product" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New Product</h1>
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

                            <input type="text" class="form-control form-control-solid" placeholder="Product name" name="name" required >
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Category Selection-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Category</span>
                            </label>
                            <div class="input-group input-group-solid">
                                <span class="input-group-text border-right">
                                    <i class="ki-duotone ki-notepad-bookmark fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </span>
                                <div class="overflow-hidden flex-grow-1">
                                    <select data-dropdown-parent="#modal_new_product" class="form-select form-select-solid rounded-start-0" name="category_id" data-control="select2" data-placeholder="Select a category" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected( $category->id == 1 )>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Category Selection-->

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Product code</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="AB-12" name="product_code" required>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Rental Price(TK)</span>
                                    </label>
                                    <!--end::Label-->
        
                                    <input type="number" class="form-control form-control-solid" name="rental_price" required>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Dimension(feet)</span>
                                    </label>
                                    <!--end::Label-->
    
                                    <input type="text" class="form-control form-control-solid" placeholder="1x2" name="dimension" >
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Available Quantity (psc)</span>
                                    </label>
                                    <!--end::Label-->
        
                                    <input type="number" class="form-control form-control-solid" name="stock" placeholder="10">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Product Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Image for the single project section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-150px" style="background-image: url({{ asset('/assets/admin/assets/media/placeholder/banner.webp') }}); background-position: 50% 50%;">
                                    </div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change product image">
                                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                class="path2"></span></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Cancel product image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove product image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->

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
    <!--end::Page new modal-->
    <!--begin::Page edit modal-->
    <div class="modal fade" id="modal_update_product" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.product.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <input type="hidden" name="id" id="editProductId">
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">Update Product</h1>
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

                            <input type="text" class="form-control form-control-solid" id="editProductName" placeholder="Product name" name="name" required >
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Category Selection-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">
                                <span class="required">Category</span>
                            </label>
                            <div class="input-group input-group-solid">
                                <span class="input-group-text border-right">
                                    <i class="ki-duotone ki-notepad-bookmark fs-3">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                        <span class="path4"></span>
                                        <span class="path5"></span>
                                        <span class="path6"></span>
                                    </i>
                                </span>
                                <div class="overflow-hidden flex-grow-1">
                                    <select data-dropdown-parent="#modal_update_product" class="form-select form-select-solid rounded-start-0" name="category_id" id="editProductCategory" data-control="select2" data-placeholder="Select a category" required>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" @selected( $category->id == 1 )>{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--end::Category Selection-->

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Product code</span>
                                    </label>
                                    <!--end::Label-->
                                    <input type="text" class="form-control form-control-solid" placeholder="AB-12" name="product_code" id="editProductCode" required>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span class="required">Rental Price(TK)</span>
                                    </label>
                                    <!--end::Label-->
        
                                    <input type="number" class="form-control form-control-solid" name="rental_price" id="editProductRentalPrice" required>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Dimension(feet)</span>
                                    </label>
                                    <!--end::Label-->
    
                                    <input type="text" class="form-control form-control-solid" placeholder="1x2" name="dimension" id="editProductDimension">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                            <div class="col-12 col-md-6">
                                <!--begin::Input group-->
                                <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                    <!--begin::Label-->
                                    <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                        <span>Available Quantity (psc)</span>
                                    </label>
                                    <!--end::Label-->
        
                                    <input type="number" class="form-control form-control-solid" name="stock" placeholder="10" id="editProductStock">
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Input group-->
                            </div>
                        </div>

                        <!--begin::Input group row-->
                        <div class="row">
                            <!--begin::Image input-->
                            <div class="mb-10 fv-row">
                                <label class="fs-6 fw-semibold mb-4 d-block">
                                    <span>Product Image</span>
                                    <span class="ms-1" data-bs-toggle="tooltip"
                                        title="Image for the single project section.">
                                        <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </span>
                                </label>
                                <div class="image-input image-input-outline" data-kt-image-input="true">
                                    <!--begin::Image preview wrapper-->
                                    <div class="image-input-wrapper w-125px h-150px" id="editImagePreview" style="background-image: url({{ asset('/assets/admin/assets/media/placeholder/banner.webp') }}); background-position: 50% 50%;">
                                    </div>
                                    <!--end::Image preview wrapper-->

                                    <!--begin::Edit button-->
                                    <label
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="change" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Change product image">
                                        <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span
                                                class="path2"></span></i>

                                        <!--begin::Inputs-->
                                        <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                        <input type="hidden" name="avatar_remove" />
                                        <!--end::Inputs-->
                                    </label>
                                    <!--end::Edit button-->

                                    <!--begin::Cancel button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="cancel" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Cancel product image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Cancel button-->

                                    <!--begin::Remove button-->
                                    <span
                                        class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                        data-kt-image-input-action="remove" data-bs-toggle="tooltip"
                                        data-bs-dismiss="click" title="Remove product image">
                                        <i class="ki-outline ki-cross fs-3"></i>
                                    </span>
                                    <!--end::Remove button-->
                                </div>
                                <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
                            </div>
                            <!--end::Image input-->
                        </div>
                        <!--end::Input group row-->

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
    <!--end::Page edit modal-->
@endsection

@section('drawers')
<!--begin::Chat drawer-->
<div id="kt_drawer_chat" class="bg-body" data-kt-drawer="true" data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'100%', 'md': '500px'}" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close">

    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Categories</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">28 Categories</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <a href="#" data-bs-toggle="modal" data-bs-target="#category_new_modal" class="me-0 btn btn-sm btn-light-primary">
                    <i class="ki-duotone ki-file fs-5">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i> New
                </a>
                <!--end::Menu-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-duotone ki-cross-square fs-2"><span class="path1"></span><span class="path2"></span></i>
                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Content-->
            <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px">
                <!--begin::Content-->
                    <!--begin::List Widget 4-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Body-->
                <div class="card-body pt-5">
                    @foreach ($categories as $category)
                    <!--begin::Item-->
                    <div class="d-flex align-items-sm-center mb-7">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-50px me-5">
                            <img src="{{ asset('storage').'/'.$category->image }}" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <div class="flex-grow-1 me-2">
                                <a href="#" class="text-gray-800 text-hover-primary fs-6 fw-bold">{{  $category->name }}</a>
                                <span class="text-muted fw-semibold d-block fs-7">{{  $category->product_count }} Product{{  $category->product_count > 1 ? 's' : '' }}</span>
                            </div>
                            <div class="my-2">
                                <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1" title="Some info about it's function!" data-bs-toggle="modal" data-bs-target="#category_update_modal" onclick="inputCategoryData({{ json_encode($category) }}, '{{ asset('storage') }}')">
                                    <i class="ki-duotone ki-pencil fs-2">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                </a>
                                @if (!($category->product_count || $category->id == 1))
                                <form class="d-inline me-1"
                                    action="{{ route('admin.category.destroy', $category->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-icon btn-bg-light bg-hover-light-danger btn-active-color-danger btn-sm me-1" title="Some info about it's function!" onclick="return confirm('Do you want to delete this Category?')">
                                        <i class="ki-duotone ki-trash fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                            <span class="path4"></span>
                                            <span class="path5"></span>
                                        </i>
                                    </button>
                                </form>
                                @endif
                            </div>
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->
                    @endforeach
                </div>
                <!--end::Body-->
            </div>
            <!--end::List Widget 4-->
                <!--end::Content-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer-->
@endsection
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script src="{{ asset('/assets/admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <script src="{{ asset('/assets/admin/assets/js/custom/apps/ecommerce/catalog/products.js') }}"></script>
    <script>
        function inputProductData(data, storagePath) {
            $('#editProductId').val(data.id);
            $('#editProductName').val(data.name);
            $('#editProductCategory').val(data.category_id);
            $('#editProductCode').val(data.product_code);
            $('#editProductRentalPrice').val(data.rental_price);
            $('#editProductDimension').val(data.dimension);
            $('#editProductStock').val(data.stock);
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
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
