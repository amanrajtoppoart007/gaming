@extends("user.layout.app")
@section("content")
    <div class="card card-stretch mb-5 mb-xxl-8">
        <div class="card-body">
            <div class="pt-9">
                <div class="row">
                    @foreach($puzzles as $puzzle)
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 me-n2 mb-5 text-center justify-content-center">
                        <button type="button"
                                class="btn btn-outline btn-bg-primary btn-color-info-600  border-dashed border-active border-primary px-6 py-7 text-start w-100 min-w-150px text-center">
                                 <span class="text-white fw-boldest">Level {{$puzzle->level}}</span>
                                 <br/>
                                 <span class="text-white fw-boldest"></span>
                        </button>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
