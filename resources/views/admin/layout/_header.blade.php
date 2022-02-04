<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header"
     data-kt-sticky-offset="{default: '200px', lg: '300px'}">
    <div class="container-xxl d-flex align-items-stretch justify-content-between">
        <div class="d-flex align-items-center">
            <button class="btn btn-icon btn-accent me-2 me-lg-6" id="kt_mega_menu_toggle" data-bs-toggle="modal"
                    data-bs-target="#kt_mega_menu_modal">
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15"
                                             viewBox="0 0 16 15" fill="none">
											<rect y="6" width="16" height="3" rx="1.5" fill="black"/>
											<rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="black"/>
											<rect opacity="0.3" width="12" height="3" rx="1.5" fill="black"/>
										</svg>
									</span>
            </button>
            <a href="?page=index">
                <img alt="Logo" src="{{asset('assets/media/logos/logo-default.svg')}}" class="h-30px"/>
            </a>
        </div>
        <div class="d-flex align-items-center">
            <div class="ms-1 ms-lg-6">
                <div class="btn btn-icon btn-sm btn-active-bg-accent" data-kt-menu-trigger="click"
                     data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
                    <a href="{{ route('admin.logout') }}"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
