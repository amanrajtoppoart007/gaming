@extends("user.layout.app")
@section("css")
   <style>
       i {
           color: #fc7a3c;
       }
   </style>
@endsection
@section("content")

    <div class="card card-stretch mb-5 mb-xxl-8">
        <div class="card-body">
            <div class="pt-9">
                <div class="row">
                    @foreach($puzzles as $puzzle)
                    <div class="col-1 col-sm-1 col-md-1 col-lg-1 col-xl-1 me-n2 mb-5 text-center justify-content-center">
                        <a href="{{$puzzle['is_locked']=='locked'?'#':route('puzzle.replay',$puzzle['id'])}}" type="button" class="btn btn-outline btn-bg-primary btn-color-info-600  border-dashed border-active border-primary px-6 py-7 text-start w-100 min-w-150px text-center">
                            <span class="text-white fw-boldest">Level {{$puzzle['level']}}</span>

                            <br/>
                            <span class="text-white fw-boldest">
                                     {{$puzzle['is_locked']=='locked'?'Locked':"Play Again"}}
                            </span>
                            <br/>
                            <span class="text-white fw-boldest">
                                       @if($puzzle['user_score']===3)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>

                                @elseif($puzzle['user_score']===2)
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @elseif($puzzle['user_score']===1)
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @elseif($puzzle['user_score']===0)
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @endif
                                 </span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
