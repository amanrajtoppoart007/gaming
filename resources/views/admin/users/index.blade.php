@extends("admin.layout.app")
@section("content")
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Created Date</th>
                    <th>Score/<span><i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i>
                                <i class="fas fa-star text-primary"></i></span></th>
                </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold">
                @foreach ($users as $user)
                    <tr>
                        <th>#{{$user->id}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>{{$user->created_at->format('dd-mm-yy')}}</th>
                        <th>
                            <a href="javascript:void(0)" class="btn btn-primary">
                                @if($user->user_score===3)
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>

                                @elseif($user->user_score===2)
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @elseif($user->user_score===1)
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @elseif($user->user_score===0)
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                    <i class="far fa-star"></i>
                                @endif
                            </a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer">
            {{ $users->links() }}
        </div>
    </div>
@endsection
