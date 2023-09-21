<div class="card card-flush mb-0" data-kt-sticky="true" data-kt-sticky-name="inbox-aside-sticky" data-kt-sticky-offset="{default: false, xl: '100px'}" data-kt-sticky-width="{lg: '275px'}" data-kt-sticky-left="auto" data-kt-sticky-top="100px" data-kt-sticky-animation="false" data-kt-sticky-zindex="95">
    <!--begin::Aside content-->
    <div class="card-body">
        <!--begin::Button-->
        <a href="compose.html" class="btn btn-primary fw-bold w-100 mb-8">New Message</a>
        <!--end::Button-->

        <!--begin::Menu-->
        <div class="menu menu-column menu-rounded menu-state-bg menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary mb-10">
            <!--begin::Menu item-->
            <div class="menu-item mb-3">
                <!--begin::Inbox-->
                <a href="{{ route('admin.inbox.messages') }}" class="menu-link text-gray-800 {{ request()->fullUrl() === route('admin.inbox.messages') ? 'active' : '' }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-sms fs-2 me-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title fw-bold">Inbox</span>
                    @if ($newMessageCount > 0)
                    <span class="badge badge-light-primary">{{ $newMessageCount }}</span>
                    @endif
                </a>
                <!--end::Inbox-->
            </div>
            <!--end::Menu item-->

            @if ($messages->where('is_unread', 1)->count())
            <!--begin::Menu item-->
            <div class="menu-item mb-3">
                <!--begin::Draft-->
                <a href="{{ route('admin.inbox.messages') }}?type=unread" class="menu-link text-gray-800 {{ Str::startsWith(request()->fullUrl(), route('admin.inbox.messages').'?type=unread') ? 'active' : '' }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-file fs-2 me-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title fw-bold">Unread</span>
                    <span class="badge badge-light-info">{{ $messages->where('is_unread', 1)->count() }}</span>
                </a>
                <!--end::Draft-->
            </div>
            <!--end::Menu item-->
            @endif

            @if ($messages->where('is_important', 1)->count())
            <!--begin::Menu item-->
            <div class="menu-item mb-3">
                <!--begin::Sent-->
                <a href="{{ route('admin.inbox.messages') }}?type=important" class="menu-link text-gray-800 {{ Str::startsWith(request()->fullUrl(), route('admin.inbox.messages').'?type=important') ? 'active' : '' }}">
                    <span class="menu-icon">
                        <i class="ki-duotone ki-send fs-2 me-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <span class="menu-title fw-bold">Important</span>
                    <span class="badge badge-light-warning">{{ $messages->where('is_important', 1)->count() }}</span>
                </a>
                <!--end::Sent-->
            </div>
            <!--end::Menu item-->
            @endif

            <!--begin::Menu item-->
            <div class="menu-item">
                <!--begin::Trash-->
                <a href="{{ route('admin.inbox.messages') }}" class="menu-link text-gray-800 {{ Str::startsWith(request()->url(), route('admin.faqs')) ? 'here' : '' }}">
                    <span class="menu-icon"><i class="ki-duotone ki-trash fs-2 me-3"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i></span>
                    <span class="menu-title fw-bold">Archive</span>
                </a>
                <!--end::Trash-->
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Aside content-->
</div>