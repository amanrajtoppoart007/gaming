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

                     <li class="nav-item mb-1" title="Change Password" data-bs-toggle="tooltip" data-bs-dismiss="click"
                        data-bs-placement="right">
                        <a href="{{route('admin.change.password')}}"
                           class="nav-link h-40px w-40px h-lg-50px w-lg-50px btn btn-custom btn-icon btn-color-white">
                            <!--begin::Svg Icon | path: assets/media/icons/duotune/coding/cod001.svg-->
                            <span class="svg-icon svg-icon-muted svg-icon-2hx">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black"/>
                                    <path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black"/>
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
