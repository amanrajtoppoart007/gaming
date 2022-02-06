@extends("user.layout.app")
@section("content")

    <div class="mb-10">
        <div class="d-flex justify-content-between align-items-center mb-7">
            <h2 class="fw-bolder text-dark fs-2 mb-0">Puzzles</h2>
            <a href="#" class="btn btn-light-primary btn-sm fw-bolder">View All</a>
        </div>
    </div>
    <div class="row g-5 g-xxl-8">
        @foreach($puzzles as $puzzle)
            <div class="col-md-4 col-xxl-4 col-lg-12">
                <div class="card shadow-none">
                    <div class="card-body p-0">
                        <div class="overlay rounded overflow-hidden">
                            <div class="overlay-wrapper rounded bg-light text-center">
                                @if($puzzle->getMedia('questions')->last())
                                    <img src="{{$puzzle->getMedia('questions')->last()->getUrl()}}" alt=""
                                         class="mw-100 w-200px"/>
                                @endif
                            </div>
                            <div class="overlay-layer">
                                <a href="{{route('puzzle.view',$puzzle->id)}}"
                                   class="btn fw-bolder btn-sm btn-primary me-2">Solve</a>
                            </div>
                        </div>
                        <div class="text-center mt-5 mb-md-0 mb-lg-5 mb-md-0 mb-lg-5 mb-lg-0 mb-5 d-flex flex-column">
                            <a href="{{route('puzzle.view',$puzzle->id)}}"
                               class="fs-4 fw-bolder text-gray-800 text-hover-primary mb-1">Level {{$puzzle->level}}</a>
                        </div>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
@endsection
