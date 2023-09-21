@php
    function formatTitle($input) {
        $words = explode('-', $input);
        $capitalizedFirstWord = ucfirst($words[0]);
        if (count($words) > 1) {
            $lowercaseWords = array_map('strtolower', array_slice($words, 1));
            $result = $capitalizedFirstWord . ' ' . implode(' ', $lowercaseWords);
        } else {
            $result = $capitalizedFirstWord;
        }
        return $result;
    }
@endphp
@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Pages</title>
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
            background-image: url('{{ asset("assets/admin/assets/media/svg/avatars/blank.svg") }}');
        }

        [data-bs-theme="dark"] .image-input-placeholder {
            background-image: url('{{ asset("assets/admin/assets/media/svg/avatars/blank-dark.svg") }}');
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Page Control
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
                    <li class="breadcrumb-item text-muted">Page Control</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">


                <!--begin::Secondary button-->
                <a href="#" class="btn btn-sm fw-bold bg-body btn-color-gray-700 btn-active-color-primary"
                    data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
                    Rollover </a>
                <!--end::Secondary button-->

                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_target">
                    Add Target </a>
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
    <div id="kt_app_content_container" class="app-container container-xxl">

        <!--begin::Row-->
        <div class="card mb-5 mb-xl-8">
            <!--begin::Header-->
            <div class="card-header border-0 pt-5">
                <h3 class="card-title align-items-start flex-column">
                    <span class="card-label fw-bold fs-3 mb-1">Toggle Pages</span>

                    <span class="text-muted mt-1 fw-semibold fs-7">There are {{ $pages->count() }} pages</span>
                </h3>
            </div>
            <!--end::Header-->

            <!--begin::Body-->
            <div class="card-body pt-3">
                <!--begin::Table container-->
                <div class="table-responsive">
                    <!--begin::Table-->
                    <table class="table table-row-dashed table-row-gray-800 align-middle gs-0 gy-4">
                        <!--begin::Table head-->
                        <thead>
                            <tr class="border-0">
                                <th class="p-0 "></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-200px"></th>
                                <th class="p-0 min-w-150px"></th>
                                <th class="p-0 min-w-100px text-end"></th>
                            </tr>
                        </thead>
                        <!--end::Table head-->

                        <!--begin::Table body-->
                        <tbody>
                            @if ($pages->count())
                            @foreach ($pages as $page)
                            <tbody class="label">
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-50px me-2">
                                                <span class="symbol-label {{ $page->status ? 'bg-light-primary' : '' }}">
                                                    <i class="ki-duotone ki-note-2 fs-2x {{ $page->status ? 'text-primary' : '' }}">
                                                        <span class="path1"></span>
                                                        <span class="path2"></span>
                                                        <span class="path3"></span>
                                                        <span class="path4"></span>
                                                    </i>
                                                </span>
                                            </div>
                                            <!--end::Avatar-->

                                            <!--begin::Name-->
                                            <div class="d-flex justify-content-start flex-column" data-toggle="toggle">
                                                <a href="#" class="text-gray-900 fw-bold text-hover-primary mb-1 fs-6">{{ $page->name }}</a>
                                                <span class="text-muted fw-semibold text-muted d-block fs-7">Title: {{ $page->page_title }}</span>
                                            </div>
                                            <!--end::Name-->
                                        </div>
                                    </td>
                                    <td class="text-end">
                                        @if ($page->status == 1)
                                            <span class="badge badge-light-success">Active</span>
                                        @else
                                            <span class="badge badge-light-danger">Inactive</span>
                                        @endif
                                    </td>
                                    <td class="text-end">
                                        <form class="form-check form-switch d-flex justify-content-end" title="Some info about it's function!" action="{{ route('admin.page.change-status', $page->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input class="form-check-input cursor-pointer h-20px w-30px" type="checkbox" role="switch" id="flexSwitchCheckChecked" @checked($page->status) onchange="this.form.submit()">
                                        </form>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm"
                                            title="Some info about it's function!">
                                            <i class="ki-duotone fs-2 ki-arrow-two-diagonals">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </a>
                                        <a href="#" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            title="Some info about it's function!" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_new_target" onclick="inputPageData({{ json_encode($page) }}, '{{ asset('storage') }}')">
                                            <i class="ki-duotone ki-pencil fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                        <a href="#{{ $page->id }}" class="btn btn-icon btn-bg-light btn-active-color-primary btn-sm me-1"
                                            title="Some info about it's function!" data-toggle="toggle">
                                            <i class="ki-duotone ki-switch fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                            <tbody class="hide-child ">
                                @if ($page->sections->count() == 0)
                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <p class="fs-4 text-gray-600">No sections found!</p>
                                        </td>
                                    </tr>
                                @else
                                @foreach ($page->sections as $section)
                                    <tr>
                                        <td class="ps-10 py-1">
                                            <div class="d-flex align-items-center">
                                                <!--begin::Avatar-->
                                                <div class="symbol symbol-40px me-2">
                                                    <span class="symbol-label {{ $section->pivot->status ? 'bg-light-info' : '' }}">
                                                        <i class="ki-duotone fs-2x ki-code {{ $section->pivot->status ? 'text-info' : '' }}">
                                                            <span class="path1"></span>
                                                            <span class="path2"></span>
                                                            <span class="path3"></span>
                                                            <span class="path4"></span>
                                                        </i>
                                                    </span>
                                                </div>
                                                <!--end::Avatar-->

                                                <!--begin::Name-->
                                                <div class="d-flex justify-content-start flex-column">
                                                    <p class="text-gray{{ $section->pivot->status ? '-800' : '-400' }} fw-medium mb-1 fs-6 px-6">{{ formatTitle($section->name) }}</p>
                                                </div>
                                                <!--end::Name-->
                                            </div>
                                        </td>
                                        <td class="text-end py-1">
                                            <span class="badge {{ $section->pivot->status ? 'badge-light-info' : 'badge-light-warning' }}">
                                                {{ $section->pivot->status ? 'Visible' : 'Hidden' }}
                                            </span>
                                        </td>
                                        <td class="text-end pe-10 py-1">
                                            <a href="{{ route('admin.page.section.change-status', $section->pivot->id) }}" class="symbol symbol-30px me-2 cursor-pointer" title="{{ $section->pivot->status ? 'Hide' : 'Show' }}">
                                                <span class="symbol-label bg-hover-light-info">
                                                    <i class="fas fa-eye{{ $section->pivot->status ? '-slash' : '' }} fs-4 text-hover"></i>
                                                </span>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                            </tbody>
                            @endforeach
                            @else
                            <tbody>
                                <tr>
                                    <td colspan="4" class="text-center">
                                        <p class="fs-4 text-gray-600">No pages found!</p>
                                    </td>
                                </tr>
                            </tbody>
                            @endif
                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Table container-->
            </div>
            <!--begin::Body-->
        </div>
        <!--end::Row-->
    </div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
    <!--begin::Page edit modals-->
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <!--begin::Modal content-->
            <div class="modal-content rounded">
                <!--begin::Modal header-->
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                    <!--end::Close-->
                </div>
                <!--begin::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <!--begin:Form-->
                    <form id="kt_modal_new_target_form" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.page.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <input type="hidden" id="editIdInput" name="id">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" id="editPageModalTitle"></h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Page Title</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the title that will be shown on the browser tab.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input type="text" id="editPageTitleInput" class="form-control form-control-solid" placeholder="E.g Home | Our Website" name="page_title" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Meta Title</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is important for SEO and preview in various social media.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input id="editMetaTitleInput" type="text" class="form-control form-control-solid" placeholder="E.g: The best website in Bangladesh" name="meta_title">
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Page Description</label>
                            <textarea id="editMetaDescriptionInput" class="form-control form-control-solid" rows="3" name="meta_description" placeholder="Type Page Description"></textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="fs-6 fw-semibold mb-4 d-block">
                                <span>Meta Tags</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="These are the tags that will help users to find this page. Recommended for better SEO.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <input id="editMetaKeywordsInput" class="form-control form-control-solid" value="Builder,Bangladesh" name="meta_keywords" />
                        </div>
                        <!--end::Input group-->

                        <!--begin::Image input-->
                        <div class="mb-8 fv-row">
                            <label class="fs-6 fw-semibold mb-4 d-block">
                                <span>Meta Image</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is required for preview in various social media cards.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('/assets/admin/assets/media/svg/avatars/blank.svg') }})">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-200px h-125px" id="editModalImagePreview"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Change page image">
                                    <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="meta_image" accept=".png, .jpg, .jpeg, .webp" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Cancel page image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Remove page image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>
                            <div class="form-text">Allowed file types:  png, jpg, jpeg.</div>
                        </div>
                        <!--end::Image input-->

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
    <!--end::Modal - New target-->
@endsection
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <!--begin::Custom Javascript(used for this page only)-->
    {{-- <script src="{{ asset('assets/admin/assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom/utilities/modals/new-target.js') }}"></script>
    <script src="{{ asset('assets/admin/assets/js/custom/utilities/modals/users-search.js') }}"></script> --}}
    <!--end::Custom Javascript-->

    <script>
        $(document).ready(function() {
            $('[data-toggle="toggle"]').click(function() {
                //toggle class .show-child
                $(this).parents().next('.hide-child').toggleClass('show-child');
            });
        });

        var input1 = document.querySelector("#editMetaKeywordsInput");
        new Tagify(input1);

        function inputPageData(data, storagePath){
            // change the form title
            $('#editPageModalTitle').text('Update ' + data.name + ' Page');
            $('#editPageTitleInput').val(data.page_title);
            $('#editMetaTitleInput').val(data.meta_title);
            $('#editMetaDescriptionInput').val(data.meta_description);
            $('#editMetaKeywordsInput').val(data.meta_keywords);
            $('#editIdInput').val(data.id);
            $('#editModalImagePreview').css('background-image', 'url('+ storagePath + '/' + data.meta_image + ')');
            console.log(storagePath + '/' + data.meta_image);
        }
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
