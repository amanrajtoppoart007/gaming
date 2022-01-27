
					<!--begin::Header-->
					<div id="kt_header" class="header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
						<!--begin::Container-->
						<div class="container-xxl d-flex align-items-stretch justify-content-between">
							<!--begin::Left-->
							<div class="d-flex align-items-center">
								<!--begin::Mega Menu Toggler-->
								<button class="btn btn-icon btn-accent me-2 me-lg-6" id="kt_mega_menu_toggle" data-bs-toggle="modal" data-bs-target="#kt_mega_menu_modal">
									<!--begin::Svg Icon | path: icons/duotune/general/gen059.svg-->
									<span class="svg-icon svg-icon-3">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" viewBox="0 0 16 15" fill="none">
											<rect y="6" width="16" height="3" rx="1.5" fill="black" />
											<rect opacity="0.3" y="12" width="8" height="3" rx="1.5" fill="black" />
											<rect opacity="0.3" width="12" height="3" rx="1.5" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Mega Menu Toggler-->
								<!--begin::Logo-->
								<a href="?page=index">
									<img alt="Logo" src="{{asset('assets/media/logos/logo-default.svg')}}" class="h-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Left-->
							<!--begin::Right-->
							<div class="d-flex align-items-center">
								<!--begin::Search-->
								<button class="btn btn-icon btn-sm btn-active-bg-accent ms-1 ms-lg-6" data-bs-toggle="modal" data-bs-target="#kt_header_search_modal" id="kt_header_search_toggle">
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Search-->
								<!--begin::Message-->
								<button class="btn btn-icon btn-sm btn-active-bg-accent ms-1 ms-lg-6" id="kt_drawer_chat_toggle">
									<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="black" />
											<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Message-->
								<!--begin::User-->
								<div class="ms-1 ms-lg-6">
									<!--begin::Toggle-->
									<div class="btn btn-icon btn-sm btn-active-bg-accent" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
										<!--begin::Svg Icon | path: icons/duotune/communication/com013.svg-->
										<span class="svg-icon svg-icon-1 svg-icon-dark">
											<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
												<path d="M6.28548 15.0861C7.34369 13.1814 9.35142 12 11.5304 12H12.4696C14.6486 12 16.6563 13.1814 17.7145 15.0861L19.3493 18.0287C20.0899 19.3618 19.1259 21 17.601 21H6.39903C4.87406 21 3.91012 19.3618 4.65071 18.0287L6.28548 15.0861Z" fill="black" />
												<rect opacity="0.3" x="8" y="3" width="8" height="8" rx="4" fill="black" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>

<!--layout-partial:partials/layout/_header_user_menu.html-->

								</div>
								<!--end::User-->
								<!--begin::Notifications-->
								<div class="ms-1 ms-lg-6">
									<!--begin::Dropdown-->
									<button class="btn btn-icon btn-sm btn-light-danger fw-bolder pulse pulse-danger" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="kt_activities_toggle">
										<span class="position-absolute fs-6">3</span>
										<span class="pulse-ring"></span>
									</button>

<!--layout-partial:partials/layout/_header_notifications_menu.html-->

									<!--end::Dropdown-->
								</div>
								<!--end::Notifications-->
								<!--begin::Aside Toggler-->
								<button class="btn btn-icon btn-sm btn-active-bg-accent d-lg-none ms-1 ms-lg-6" id="kt_aside_toggler">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1 svg-icon-dark">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</button>
								<!--end::Aside Toggler-->
								<!--begin::Sidebar Toggler-->
								<!--end::Sidebar Toggler-->
							</div>
							<!--end::Right-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
