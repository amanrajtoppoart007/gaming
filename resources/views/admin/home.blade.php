@extends("admin.layout.app")
@section("content")
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Dashboard</h3>
        </div>
        <div class="card-body">
            <div class="row g-0 g-xl-5 g-xxl-8">
                <div class="col-xl-4">
                    <div class="card bg-primary card-stretch mb-5 mb-xxl-8">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-white bg-opacity-10">
														<span class="svg-icon svg-icon-2x svg-icon-white">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
                                                                      d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z"
                                                                      fill="black"/>
																<rect x="6" y="12" width="7" height="2" rx="1"
                                                                      fill="black"/>
																<rect x="6" y="7" width="12" height="2" rx="1"
                                                                      fill="black"/>
															</svg>
														</span>
													</span>
                                </div>
                                <div>
                                    <a href="{{route('admin.puzzle.index')}}"
                                       class="fs-4 text-white text-hover-info fw-bolder">Puzzles</a>
                                </div>
                            </div>
                            <div class="fw-bolder text-white pt-7">
                                <span class="d-block">{{$puzzle_count}} Puzzles</span>
                                <span class="d-block pt-2">{{$puzzle_user}} Users played the puzzle</span>
                            </div>
                            <div class="progress h-6px mt-7 bg-white bg-opacity-10">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 70%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card bg-info card-stretch mb-5 mb-xxl-8">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-light-success">
														<span class="svg-icon svg-icon-2x svg-icon-success">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<path opacity="0.3"
                                                                      d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                                      fill="black"/>
																<path
                                                                    d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                                    fill="black"/>
															</svg>
														</span>
													</span>
                                </div>
                                <div>
                                    <a href="{{route('admin.users.index')}}"
                                       class="fs-4 text-white text-hover-primary fw-bolder">Users</a>
                                </div>
                            </div>
                            <div class="fw-bolder text-white pt-7">
                                <span class="d-block">{{$user_count}} Users</span>
                                <span class="d-block pt-2">#</span>
                            </div>
                            <div class="progress h-6px bg-white bg-opacity-10 mt-7">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 70%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card bg-success card-stretch mb-5 mb-xxl-8">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="symbol symbol-50px me-5">
													<span class="symbol-label bg-light-warning">
														<span class="svg-icon svg-icon-2x svg-icon-warning">
															<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                 height="24" viewBox="0 0 24 24" fill="none">
																<rect x="2" y="2" width="9" height="9" rx="2"
                                                                      fill="black"/>
																<rect opacity="0.3" x="13" y="2" width="9" height="9"
                                                                      rx="2" fill="black"/>
																<rect opacity="0.3" x="13" y="13" width="9" height="9"
                                                                      rx="2" fill="black"/>
																<rect opacity="0.3" x="2" y="13" width="9" height="9"
                                                                      rx="2" fill="black"/>
															</svg>
														</span>
													</span>
                                </div>
                                <div>
                                    <a href="#"
                                       class="fs-4 text-white text-hover-primary fw-bolder">{{now()->format('d M Y')}}</a>
                                </div>
                            </div>
                            <div class="fw-bolder text-white pt-7">
                                <span class="d-block">#</span>
                                <span class="d-block pt-2">#</span>
                            </div>
                            <div class="progress h-6px bg-white bg-opacity-10 mt-7">
                                <div class="progress-bar bg-white" role="progressbar" style="width: 70%;"
                                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            {{trans('panel.site_title')}} v1.0.0
        </div>
    </div>
@endsection
