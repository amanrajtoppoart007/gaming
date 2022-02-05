@extends("guest.layout.app")
@section("css")
    <link rel="stylesheet" type="text/css" href="{{asset('assets/library/jssocials/jssocials.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/library/jssocials/jssocials-theme-flat.css')}}" />
@endsection
@section("content")
    <div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
                    <!--begin::Sidebar-->
				<div class="card bg-info">
									<!--begin::Body-->
									<div class="card-body px-0">
										<div class="pt-0">
											<!--begin::Chart-->
											<div class="d-flex flex-center position-relative bgi-no-repeat bgi-size-contain bgi-position-x-center bgi-position-y-center" style="background-image:url('assets/media/svg/illustrations/bg-2.svg')">
												<div class="position-absolute mb-7">
													<div class="symbol symbol-circle symbol-100px overflow-hidden d-flex flex-center z-index-1">
														<span class="symbol-label bg-warning align-items-end">
															<img alt="Logo" src="{{asset('assets/media/svg/avatars/016-boy-7.svg')}}" class="mh-75px" />
														</span>
													</div>
												</div>
												<div id="kt_user_chart" style="height: 200px"></div>
											</div>
											<!--end::Chart-->
											<!--begin::Items-->
											<div class="pt-4">
												<!--begin::Title-->
												<div class="text-center pb-12">
													<!--begin::Username-->
													<h3 class="fw-bolder text-white fs-2 pb-4">{{$user->name}}</h3>
													<!--end::Username-->
													<!--end::Action-->
													<span class="fw-bolder fs-6 text-primary px-4 py-2 rounded bg-white bg-opacity-10">Joined at - {{$user->created_at->format('d/m/Y')}}</span>
													<!--begin::Action-->
												</div>
												<!--end::Title-->
												<!--begin::Row-->

                                                <div class="row px-6">
                                                    <div class="col-md-3">
                                                        <div class="d-flex bg-light-primary card-rounded flex-grow-1">
                                                            <!--begin::Section-->
                                                            <div class="py-10 ps-10">
                                                                <!--begin::Text-->
                                                                <div class="">
                                                                    <span class="text-primary d-block mb-n1">Your Score</span>
                                                                    <span class="font-weight-light fs-1 text-gray-800">
														               <span class="fw-bolder fs-1 text-gray-800">{{$score}}/{{$maxScore}}</span>
                                                                    </span>
                                                                </div>
                                                                <!--end::Text-->
                                                            </div>
                                                            <!--end::Section-->
                                                            <!--begin::Pic-->
                                                            <div
                                                                class="position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1"
                                                                style="background-image:url('{{asset('assets/media/misc/illustration-1.png')}}')"></div>
                                                            <!--end::Pic-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="d-flex bg-light-primary card-rounded flex-grow-1">
                                                            <!--begin::Section-->
                                                            <div class="py-10 ps-10">
                                                                <!--begin::Text-->
                                                                <div class="">
                                                                    <span class="text-primary d-block mb-n1">OverAll Rating Score</span>
                                                                    {!! $ratingHtml !!}
                                                                </div>
                                                                <!--end::Text-->
                                                            </div>
                                                            <!--end::Section-->
                                                            <!--begin::Pic-->
                                                            <div
                                                                class="position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1"
                                                                style="background-image:url('{{asset('assets/media/misc/illustration-1.png')}}')"></div>
                                                            <!--end::Pic-->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="d-flex bg-light-primary card-rounded flex-grow-1">
                                                            <!--begin::Section-->
                                                            <div class="py-10 ps-10">
                                                                <!--begin::Text-->
                                                                <div class="">
                                                                    <span class="text-primary d-block mb-n1">OverAll Time Taken</span>
                                                                    <span class="font-weight-light fs-1 text-gray-800">
														               <span class="fw-bolder fs-1 text-gray-800">  {{$timeTaken}} Minutes</span>
                                                                    </span>

                                                                </div>
                                                                <!--end::Text-->
                                                            </div>
                                                            <!--end::Section-->
                                                            <!--begin::Pic-->
                                                            <div
                                                                class="position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1"
                                                                style="background-image:url('{{asset('assets/media/misc/illustration-1.png')}}')"></div>
                                                            <!--end::Pic-->
                                                        </div>
                                                    </div>
                                                     <div class="col-md-3">
                                                        <div class="d-flex bg-light-primary card-rounded flex-grow-1">
                                                            <!--begin::Section-->
                                                            <div class="py-10 ps-10">
                                                                <!--begin::Text-->
                                                                <div class="">
                                                                    <span class="text-primary d-block mb-n1">Ranking</span>
                                                                     <span
                                                                        class="font-weight-light fs-1 text-gray-800">
														               <span class="fw-bolder fs-1 text-gray-800">  {{$timeTaken}} Position</span>
                                                                    </span>
                                                                </div>
                                                                <!--end::Text-->
                                                            </div>
                                                            <!--end::Section-->
                                                            <!--begin::Pic-->
                                                            <div
                                                                class="position-relative bgi-no-repeat bgi-size-contain bgi-position-y-bottom bgi-position-x-end mt-6 flex-grow-1"
                                                                style="background-image:url('{{asset('assets/media/misc/illustration-1.png')}}')"></div>
                                                            <!--end::Pic-->
                                                        </div>
                                                    </div>
                                                </div>
												<!--end::Row-->


											</div>
											<!--end::Items-->
										</div>
									</div>
									<!--end::Body-->
								</div>
								<!--end::Card-->
                    <div class="row">
                        <div class="col-md-12">
                            <div id="socialMediaShare"></div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
@section("script")
    <script src="{{asset('assets/library/jssocials/jssocials.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            $("#socialMediaShare").jsSocials({
                shares: ["twitter", "facebook",  "linkedin",  "whatsapp",  "telegram"],
                url: "{{route('guest.result.view',1)}}",
                text: "Hi,Here is my high score in {{trans('common.game_title')}} game",
                showLabel:true,
            });
        })
    </script>
@endsection
