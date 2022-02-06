@extends("admin.layout.app")
@section("content")
    <div class="card shadow-sm">
        <div class="card-header bg-primary">
            <h3 class="card-title text-white">Level {{$puzzle->level}}</h3>
            <div class="card-toolbar">
                <a href="{{route('admin.puzzle.index')}}" class="btn btn-sm btn-light mx-1">
                    <i class="fa fa-arrow-left text-primary"></i>
                </a>
                <a href="{{route('admin.puzzle.edit',$puzzle->id)}}" class="btn btn-sm btn-light">
                    <i class="fa fa-edit text-info"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <h4 class="card-title">Description</h4>
            <div class="mb-10">
                <p class="bi-text-paragraph">{{$puzzle->description}}</p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h4 class="card-title">Question Image</h4>
                    <img style="width: auto;height: 250px;border-radius: 20px;" src="{{$puzzle->question->preview}}"/>
                </div>
                <div class="col-md-4">
                    <h4 class="card-title">Solution Image</h4>
                    <img style="width: auto;height: 250px;border-radius: 20px;" src="{{$puzzle->solutions->preview}}"/>
                </div>
                <div class="col-md-4"></div>
            </div>

        </div>
        <div class="card-footer">
            <h4 class="card-title">Options</h4>
            <table class="table table-striped">
                <thead>
                   <tr>
                       <td>position</td>
                       <td>Option</td>
                       <td>Correct Answer</td>
                   </tr>
                </thead>
                <tbody>
                 @foreach($puzzle->options as $option)
                     <tr>
                         <td>{{$option->key+1}}</td>
                         <td>{{$option->option}}</td>
                         <td>{{$puzzle->solution->option_id===$option->id?'Yes':'No'}}</td>
                     </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
