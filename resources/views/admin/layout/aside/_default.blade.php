<!--begin::Aside-->
<div id="kt_aside" class="aside bg-info" data-kt-drawer="true" data-kt-drawer-name="aside"
     data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="70px"
     data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggler">
    <!--begin::Primary-->
    <div class="aside-primary d-flex flex-column align-items-center flex-row-auto">
        <!--begin::Logo-->
        <div class="aside-logo d-flex flex-column align-items-center flex-column-auto py-4 pt-lg-10 pb-lg-7"
             id="kt_aside_logo">
            <a href="?page=index">
                <img alt="Logo" src="{{asset('assets/media/logos/logo-compact.svg')}}" class="mh-50px"/>
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Nav Wrapper-->
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid pt-0 pb-5" id="kt_aside_nav">
            <!--begin::Nav scroll-->
            <div class="hover-scroll-y" data-kt-scroll="true" data-kt-scroll-height="auto"
                 data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside_nav"
                 data-kt-scroll-offset="10px">
                <!--begin::Nav-->
                <ul class="nav flex-column">
                    <!--begin::Item-->
                    <li class="nav-item mb-1" title="Dashboard" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <a href="{{route('admin.dashboard')}}"
                           class="nav-link h-40px w-40px h-lg-50px w-lg-50px btn btn-custom btn-icon btn-color-white">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="2" y="2" width="9" height="9" rx="2" fill="black"/>
													<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
													<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2"
                                                          fill="black"/>
												</svg>
											</span>
                            <!--end::Svg Icon-->
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item mb-1" title="Users" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <a href="{{route('admin.users.index')}}"
                           class="nav-link h-40px w-40px h-lg-50px w-lg-50px btn btn-custom btn-icon btn-color-white">
											<span class="svg-icon svg-icon-2 svg-icon-lg-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<path opacity="0.3"
                                                          d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                          fill="black"/>
													<path
                                                        d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                        fill="black"/>
												</svg>
											</span>
                        </a>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="nav-item mb-1" title="Puzzles" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <a href="{{route('admin.puzzle.index')}}"
                           class="nav-link h-40px w-40px h-lg-50px w-lg-50px btn btn-custom btn-icon btn-color-white">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-lg-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                     viewBox="0 0 24 24" fill="none">
													<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black"/>
													<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5"
                                                          fill="black"/>
													<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black"/>
													<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black"/>
												</svg>
											</span>
                            <!--end::Svg Icon-->
                        </a>
                    </li>

                    <!--end::Item-->
                </ul>
                <!--end::Nav-->
            </div>
            <!--end::Nav scroll-->
        </div>
        <!--end::Nav Wrapper-->

    </div>
    <!--end::Primary-->
</div>
<!--end::Aside-->
