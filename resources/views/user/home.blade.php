@extends('user.layout.app')
@section('content')
    <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
        <div class="container-xxl">
            <div class="card">
                <div class="card-body">
                    <div class="card mb-12">
                        <div class="card-body d-flex justify-content-between card-rounded p-0 d-flex bg-light-primary">
                            <div class="d-flex flex-column flex-lg-row-auto p-10 p-md-20">
                                <h1 class="fw-bolder text-dark">Guest It</h1>
                                <div class="fs-3 mb-8">Guess the correct image and earn points</div>
                                 <a href="{{route('puzzle.index')}}" class="btn btn-success btn-hover-rise mb-10">Levels</a>
                                @if($type==='new')
                                    <a href="{{$route}}" class="btn btn-success btn-hover-rise">Start New Game</a>
                                @elseif($type==='next')
                                    <a href="{{$route}}" class="btn btn-success btn-hover-rise">Continue to next game</a>
                                @elseif($type==='result')
                                  <a href="{{$route}}" class="btn btn-success btn-hover-rise mb-10">Show Score</a>
                                    @if($puzzle)
                                            <a href="{{route('puzzle.view',$puzzle->id)}}" class="btn btn-success btn-hover-rise">Restart</a>
                                    @endif
                                 @endif
                            </div>
                            <div
                                class="d-none d-md-flex flex-row-fluid mw-400px ms-auto bgi-no-repeat bgi-position-y-center bgi-position-x-left bgi-size-contain"
                                style="background-image: url('{{asset('assets/media/illustrations/sigma-1/2.png')}}');"></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
