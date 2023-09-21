@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-FAQ</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">FAQs
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
                    <li class="breadcrumb-item text-muted">FAQs</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center gap-2 gap-lg-3">
                <!--begin::Primary button-->
                <a href="#" class="btn btn-sm fw-bold btn-info" data-bs-toggle="modal" data-bs-target="#modal_new_faq">Add FAQ </a>
                <a href="#" class="btn btn-sm btn-icon fw-bold btn-info" data-bs-toggle="modal" data-bs-target="#modal_settings">
                    <i class="ki-solid ki-gear fs-3 "></i>
                </a>
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
        <!--begin::FAQ card-->
        <div class="card">
            <!--begin::Body-->
            <div class="card-body p-lg-15">
                <!--begin::Classic content-->
                <div class="mb-13">
                    <!--begin::Intro-->
                    <div class="mb-8">
                        <!--begin::Title-->
                        <h4 class="fs-16 text-gray-800 w-bolder mb-4">
                            Frequesntly Asked Questions
                        </h4>
                        <!--end::Title-->

                        <!--begin::Text-->
                        <p class="fw-semibold fs-12 text-gray-600 mb-2">
                            Enter the most asked questions and answers to them. This will help your clients to find the answers they need without contacting you.
                        </p>
                        <!--end::Text-->
                    </div>
                    <!--end::Intro-->

                    <!--begin::Row-->
                    <div class="row mb-12">
                        <!--begin::Col-->
                        <div class="col-12 mb-10 mb-md-0">
                            @if($faqs->count())
                            @foreach ($faqs as $faq)
                            <!--begin::Section-->
                            <div class="m-0">
                                <!--begin::Heading-->
                                <div class="d-flex align-items-center collapsible py-3 toggle collapsed mb-0">
                                    <!--begin::Icon-->
                                    <div class="btn btn-sm btn-icon mw-20px btn-active-color-primary me-5" data-bs-toggle="collapse" data-bs-target="#faq{{ $loop->iteration }}">
                                        <i class="ki-duotone ki-minus-square toggle-on text-primary fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                        <i class="ki-duotone ki-plus-square toggle-off fs-1">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                            <span class="path3"></span>
                                        </i>
                                    </div>
                                    <!--end::Icon-->

                                    <!--begin::Title-->
                                    <h4 class="text-gray-{{ $faq->status ? '700' : '400' }} fw-bold cursor-pointer text-hover-primary mb-0" data-bs-toggle="collapse" data-bs-target="#faq{{ $loop->iteration }}">
                                        {{ $faq->question }}
                                    </h4>

                                    <span class="ms-2">    
                                        <form class="form-check form-switch d-flex justify-content-end" title="Some info about it's function!" action="{{ route('admin.faq.change-status', $faq->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input class="form-check-input cursor-pointer h-20px w-30px" type="checkbox" role="switch" @checked($faq->status) onchange="this.form.submit()">
                                        </form>
                                    </span>

                                    <span class="symbol btn btn-sm btn-icon btn-light-primary ms-3" itle="Update this question & answer" data-bs-toggle="modal" data-bs-target="#modal_update_faq" onclick="inputPageData({{ json_encode($faq) }})">    
                                        <i class="ki-duotone ki-pencil fs-2">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </span>

                                    <form class="d-inline ms-3" action="{{ route('admin.faq.destroy', $faq->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-icon btn-light-danger btn-sm me-1" method="POST" title="Delete this question & answer" onclick="return confirm('Do you want to delete this faq?')">
                                            @method('DELETE')
                                            <i class="ki-duotone ki-trash fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                                <span class="path3"></span>
                                                <span class="path4"></span>
                                                <span class="path5"></span>
                                            </i>
                                        </button>
                                    </form>
                                    <!--end::Title-->
                                </div>
                                <!--end::Heading-->

                                <!--begin::Body-->
                                <div id="faq{{ $loop->iteration }}" class="collapse fs-6 ms-1">
                                    <!--begin::Text-->
                                    <div class="mb-4 text-gray-600 fw-semibold fs-6 ps-10">
                                        {{ $faq->answer }}
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Content-->


                                <!--begin::Separator-->
                                <div class="separator separator-dashed"></div>
                                <!--end::Separator-->
                            </div>
                            <!--end::Section-->
                            @endforeach
                            @else
                            <div class="m-0">
                                <h4 class="text-gray-700 fw-bold cursor-pointer mb-0">
                                    No FAQs found!
                                </h4>
                            </div>
                            @endif
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Classic content-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::FAQ card-->
    </div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
    <!--begin::Page new modal-->
    <div class="modal fade" id="modal_new_faq" tabindex="-1" aria-hidden="true">
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
                    <form  class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.faq.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <!--begin::Heading-->
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3">New FAQ</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Question</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the title that will be shown on the browser tab.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="What do we do?" name="question" required>
                            <div class="fv-plugins-message-container invalid-faq"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Answer</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the title that will be shown on the browser tab.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <textarea class="form-control form-control-solid" placeholder="We build your dream! :)" name="answer" required></textarea>
                        </div>
                        <!--end::Input group-->

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
    <div class="modal fade" id="modal_update_faq" tabindex="-1" aria-hidden="true">
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
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.faq.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <!--begin::Heading-->
                        <input type="hidden" id="editIdInput" name="id">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" id="editModalTitle">Update FAQ</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Question</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the title that will be shown on the browser tab.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input type="text" id="editFaqQuestion" class="form-control form-control-solid" placeholder="What do we do?" name="question" required>
                            <div class="fv-plugins-message-container invalid-faq"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Answer</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the title that will be shown on the browser tab.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <textarea id="editFaqAnswer" class="form-control form-control-solid" placeholder="We build your dream! :)" name="answer" required></textarea>
                        </div>
                        <!--end::Input group-->
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
    <!--begin::Settings modal-->
    <div class="modal fade" id="modal_settings" tabindex="-1" aria-hidden="true">
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
                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.section.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <!--begin::Heading-->
                        <input type="hidden" id="editIdInput" name="id" value="{{ $sectionData->id }}">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" id="editModalTitle">Update Section</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Title</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the short title that will appear before heading.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="Section Title" value="{{ $sectionData->title }}" name="title" required>
                            <div class="fv-plugins-message-container invalid-faq"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Heading</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the main heading of the section">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->

                            <input type="text" class="form-control form-control-solid" placeholder="Section Heading" value="{{ $sectionData->heading }}" name="heading" required>
                            <div class="fv-plugins-message-container invalid-faq"></div>
                        </div>
                        <!--end::Input group-->
                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>FAQ Description</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="This is the short description for the section.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <!--end::Label-->
                            <textarea id="editFaqAnswer" class="form-control form-control-solid" placeholder="We build your dream!" name="description" required>{{ $sectionData->description }}</textarea>
                        </div>
                        <!--end::Input group-->
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
    <!--end::Settings modal-->
@endsection
<!--begin::Page Vendors Javascript and custom JS-->
@section('exclusive_scripts')
    <script>
        function inputPageData(data){
            // change the form title
            $('#editIdInput').val(data.id);
            $('#editFaqQuestion').val(data.question);
            $('#editFaqAnswer').val(data.answer);
        }
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
