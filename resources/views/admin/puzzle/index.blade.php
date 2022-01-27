@extends("admin.layout.app")
@section("content")
    <div class="card shadow-sm">
        <div class="card-header">
            <h3 class="card-title">Puzzles</h3>
        </div>
        <div class="card-body">
           <!--begin::Wrapper-->
<div class="d-flex flex-stack mb-5">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative my-1">
        <input type="text" data-kt-docs-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Puzzle"/>
    </div>
    <!--end::Search-->

    <!--begin::Toolbar-->
    <div class="d-flex justify-content-end" data-kt-docs-table-toolbar="base">
        <!--begin::Filter-->
        <button type="button" class="btn btn-light-primary me-3">
            Filter
        </button>
        <!--end::Filter-->

        <!--begin::Add customer-->
        <button type="button" class="btn btn-primary">
            Add Level
        </button>
        <!--end::Add customer-->
    </div>
    <!--end::Toolbar-->

</div>
<!--end::Wrapper-->

<!--begin::Datatable-->
<table id="kt_datatable_example_1" class="table align-middle table-row-dashed fs-6 gy-5">
    <thead>
    <tr class="text-start text-gray-400 fw-bolder fs-7 text-uppercase gs-0">
        <th class="w-10px pe-2">
            <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_datatable_example_1 .form-check-input" value="1"/>
            </div>
        </th>
        <th>Level</th>
        <th>Image</th>
        <th>Created Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-bold">
     @foreach ($puzzles as $puzzle)
         <tr>
             <th>#</th>
             <th>{{$puzzle->level}}</th>
             <th></th>
             <th>{{$puzzle->created_at->format('dd-mm-yy')}}</th>
             <th>
                 <a href="#" class="btn btn-primary">View</a>
             </th>
         </tr>
    @endforeach
    </tbody>
</table>
<!--end::Datatable-->
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection

