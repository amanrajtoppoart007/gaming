@extends("admin.layout.app")
@section("content")
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Users</h3>
        </div>
        <div class="card-body">
            <div class="d-flex flex-stack mb-5">
                <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
                    <button type="button" class="btn btn-primary">
                        Add Customer
                    </button>
                </div>
            </div>
            <table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
                <thead>
                <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
                    <th>#</th>
                    <th>Customer Name</th>
                    <th>Email</th>
                    <th>Created Date</th>
                    <th>Actions</th>
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
                            <a href="#" class="btn btn-primary">View</a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection
