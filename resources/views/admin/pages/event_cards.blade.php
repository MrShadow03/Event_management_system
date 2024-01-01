@extends('admin.layouts.app')
<!--begin::Page Title-->
@section('title')
    <title>Admin-Event Cards</title>
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
                <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Event Cards
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
                    <li class="breadcrumb-item text-muted">Event-Cards</li>
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
    <div id="kt_app_content_container" class="app-container container-xxl">
        <div class="row g-10">
            @foreach ($event_cards as $card)
            <!--begin::Col--> 
            <div class="col-md-4">           
                <!--begin::Hot sales post-->
                <div class="card card-bordered me-md-3 shadow-sm parent-hover">  
                    <!--begin::Overlay-->
                    <a class="d-block overlay" data-fslightbox="lightbox-hot-sales" href="javascript:void(0)">
                        <!--begin::Image-->
                        <div class="overlay-wrapper bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-175px" style="background-image:url('{{ asset('storage').'/'.$card->image }}')">                       
                        </div>
                        <!--end::Image-->
                
                        <!--begin::Action-->
                        <div class="overlay-layer card-rounded bg-dark bg-opacity-25">
                            <i class="ki-duotone ki-eye fs-2x text-white">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </div>  
                        <!--end::Action-->      
                    </a>  
                    <!--end::Overlay-->  
                
                    <!--begin::Body-->
                    <div class="mt-5 pb-4 px-5">    
                        <!--begin::Title-->
                        <span class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">
                            {{ $card->title }}
                        </span>       
                        <!--end::Title-->
                
                        <!--begin::Text-->
                        <div class="fs-12 text-gray-600 text-dark mt-1">  
                            Last Update: {{ $card->updated_at->diffForHumans() }}
                        </div>
                        <!--end::Text-->

                        <!--begin::Text-->
                        <div class="fs-6 text-gray-800 text-dark mt-3">    
                            {{ $card->description }}
                        </div>
                        <!--end::Text-->
                
                        <!--begin::Text-->
                        <div class="fs-6 fw-bold mt-5 d-flex flex-column justify-content-end pt-4">
                            <!--begin::Action-->
                            <a 
                                href="#" 
                                class="btn btn-sm btn-light-primary"
                                title="Edit"
                                data-bs-toggle="modal"
                                data-bs-target="#modal_update_banner" 
                                onclick="inputPageData({{ json_encode($card) }}, '{{ asset('storage') }}')"
                            >Update</a>     
                            <!--end::Action-->              
                        </div>
                        <!--end::Text-->      
                    </div>
                    <!--end::Body-->                      
                </div>
                <!--end::Hot sales post-->
            </div>  
            <!--end::Col-->
            @endforeach
        </div>
    </div>
@endsection
<!--end::Main Content-->

@section('exclusive_modals')
    <!--begin::Page edit modal-->
    <div class="modal fade" id="modal_update_banner" tabindex="-1" aria-hidden="true">
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
                    <form id="modal_new_targ_banner" class="form fv-plugins-bootstrap5 fv-plugins-framework"
                        action="{{ route('admin.event_card.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <!--begin::Heading-->
                        <input type="hidden" id="editIdInput" name="id">
                        <div class="mb-13 text-center">
                            <!--begin::Title-->
                            <h1 class="mb-3" id="editModalTitle">Update Card</h1>
                            <!--end::Title-->
                        </div>
                        <!--end::Heading-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                            <!--begin::Label-->
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span>Title</span>
                            </label>
                            <!--end::Label-->

                            <input type="text" id="editTitleInput" class="form-control form-control-solid" placeholder="Welcome" name="title" required>
                            <div class="fv-plugins-message-container invalid-feedback"></div>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Input group-->
                        <div class="d-flex flex-column mb-8">
                            <label class="fs-6 fw-semibold mb-2">Description</label>
                            <textarea id="editDescriptionInput" class="form-control form-control-solid" rows="3" name="description" placeholder="Description"></textarea>
                        </div>
                        <!--end::Input group-->

                        <!--begin::Image input-->
                        <div class="mb-8 fv-row">
                            <label class="fs-6 fw-semibold mb-4 d-block">
                                <span class="required">Card Image</span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="Background image for the website banner.">
                                    <i class="ki-duotone ki-information-5 text-gray-500 fs-6">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </span>
                            </label>
                            <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url({{ asset('/assets/admin/assets/media/svg/avatars/blank.svg') }})">
                                <!--begin::Image preview wrapper-->
                                <div class="image-input-wrapper w-200px h-125px" id="editImagePreview"></div>
                                <!--end::Image preview wrapper-->

                                <!--begin::Edit button-->
                                <label class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="change"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Change card image">
                                    <i class="ki-duotone ki-pencil fs-6"><span class="path1"></span><span class="path2"></span></i>

                                    <!--begin::Inputs-->
                                    <input type="file" name="image" accept=".png, .jpg, .jpeg, .webp" />
                                    <input type="hidden" name="avatar_remove" />
                                    <!--end::Inputs-->
                                </label>
                                <!--end::Edit button-->

                                <!--begin::Cancel button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="cancel"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Cancel card image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Cancel button-->

                                <!--begin::Remove button-->
                                <span class="btn btn-icon btn-circle btn-color-muted btn-active-color-primary w-25px h-25px bg-body shadow"
                                data-kt-image-input-action="remove"
                                data-bs-toggle="tooltip"
                                data-bs-dismiss="click"
                                title="Remove card image">
                                    <i class="ki-outline ki-cross fs-3"></i>
                                </span>
                                <!--end::Remove button-->
                            </div>
                            <div class="form-text">Allowed file types: png, jpg, jpeg, webp.</div>
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
    <!--end::Page edit modal-->
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
            $('#editTitleInput').val(data.title);
            $('#editHeadingInput').val(data.heading);
            $('#editDescriptionInput').val(data.description);
            $('#editIdInput').val(data.id);
            $('#editImagePreview').css('background-image', 'url('+ storagePath + '/' + data.image + ')');
            $('#editVideoInput').val(data.video);
        }
    </script>
@endsection
<!--end::Page Vendors Javascript and custom JS-->
