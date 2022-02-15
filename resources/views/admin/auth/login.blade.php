@extends("admin.layout.auth")
@section("content")
   <div class="d-flex flex-column flex-root">
			<div class="d-flex flex-column flex-lg-row flex-column-fluid" id="kt_login">
				<div class="d-flex flex-column flex-lg-row-auto bg-primary w-lg-600px pt-15 pt-lg-0">
					<div class="d-flex flex-row-fluid flex-center flex-column-auto flex-column text-center mb-5">
						<a href="{{route('admin.login')}}" class="mb-6">
							<img alt="Logo" src="{{asset('assets/media/logos/logo.png')}}" class="h-250px h-lg-150px" />
						</a>
						<h3 class="fw-bolder fs-2x text-white lh-lg">Welcome to the
						<br />Admin Panel</h3>
					</div>
					<div class="d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px" style="background-image: url({{asset('assets/media/illustrations/sigma-1/2.png')}})"></div>
				</div>
				<div class="login-content flex-lg-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden py-10 py-lg-20 px-10 p-lg-7 mx-auto mw-450px w-100">
					<div class="d-flex flex-column-fluid flex-center py-10">
						<form action="{{route('admin.login.submit')}}" method="post" class="form w-100" novalidate="novalidate">
                            @csrf
							<div class="pb-5 pb-lg-15">
								<h3 class="fw-bolder text-dark display-6">Welcome to {{trans('common.game_title')}}</h3>

							<div class="fv-row mb-10">
								<label for="email" class="form-label fs-6 fw-bolder text-dark">Email</label>
								<input id="email" class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" value="" />

                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
							</div>
							<div class="fv-row mb-10">
								<div class="d-flex justify-content-between mt-n5">
									<label for="password" class="form-label fs-6 fw-bolder text-dark pt-5">Password</label>
								</div>
								<input id="password" class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" value="" />
							@if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>
							<div class="pb-lg-0 pb-5">
								<button type="submit" id="kt_login_signin_form_submit_button" class="btn btn-primary fw-bolder fs-6 px-8 py-4 my-3 me-3">Sign In</button>
							</div>
                                @if(session('message'))
                                    <div class="alert alert-info" role="alert">
                                        {{ session('message') }}
                                    </div>
                            @endif
						</form>
					</div>
				</div>
			</div>
		</div>
@endsection
