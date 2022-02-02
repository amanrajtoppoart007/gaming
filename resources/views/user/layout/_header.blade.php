
					<!--begin::Header-->
					<div id="kt_header" class="header">
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
								<!--end::Aside Toggler-->
								<!--begin::Sidebar Toggler-->
								<!--end::Sidebar Toggler-->
							</div>
							<!--end::Right-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->

