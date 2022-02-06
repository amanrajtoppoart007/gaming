@extends("admin.layout.app")
@section("content")
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Puzzles</h3>
        </div>
        <div class="card-body">
            <div class="d-flex flex-stack mb-5">
                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                    <a href="{{route('admin.puzzle.create')}}" class="btn btn-primary">
                        Add Level
                    </a>
                </div>
            </div>
            <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th>#</th>
                    <th>Level</th>
                    <th>Puzzle Image</th>
                    <th>Solution Image</th>
                    <th>Created Date</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold">
                @foreach ($puzzles as $puzzle)
                    <tr>
                        <th>#{{$puzzle->id}}</th>
                        <th>{{$puzzle->level}}</th>
                        <th>
                            @if($puzzle->getMedia('questions')->last())
                                <img style="width: 100px;height: 100px;" src="{{$puzzle->getMedia('questions')->last()->getUrl()}}"/>
                            @endif
                        </th>
                        <th>
                            @if($puzzle->getMedia('solutions')->last())
                                <img style="width: 100px;height: 100px;" src="{{$puzzle->getMedia('solutions')->last()->getUrl()}}"/>
                            @endif
                        </th>
                        <th>{{$puzzle->created_at->format('d-m-Y')}}</th>
                        <th>
                            <a href="#" class="btn btn-primary">View</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {!! $puzzles->links() !!}
        </div>
    </div>

@endsection


