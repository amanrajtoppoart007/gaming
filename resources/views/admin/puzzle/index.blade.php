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
        <button type="button" class="btn btn-light-primary me-3" >
            Filter
        </button>
        <!--end::Filter-->

        <!--begin::Add customer-->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
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


<div class="modal fade" tabindex="-1" id="kt_modal_1">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add New Level</h5>

                <!--begin::Close-->
                <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                    <span class="svg-icon svg-icon-2x"></span>
                </div>
                <!--end::Close-->
            </div>

            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">

                        <div class="input-group mb-5">
                            <span class="input-group-text" id="level-section">Level</span>
                            <input type="text" class="form-control" id="level" name="level" placeholder=""
                                   aria-label="level-section"
                                   aria-describedby="level-section"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="fv-row">
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                <!--begin::Message-->
                                <div class="dz-message needsclick">
                                    <!--begin::Icon-->
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <!--end::Icon-->

                                    <!--begin::Info-->
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop file here to upload Puzzle Image
                                            upload.</h3>
                                        <span class="fs-7 fw-bold text-gray-400">Upload only 1 file</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="fv-row">
                            <!--begin::Dropzone-->
                            <div class="dropzone" id="kt_dropzonejs_example_1">
                                <!--begin::Message-->
                                <div class="dz-message needsclick">
                                    <!--begin::Icon-->
                                    <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                    <!--end::Icon-->

                                    <!--begin::Info-->
                                    <div class="ms-4">
                                        <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop file here to upload Puzzle Solution
                                            upload.</h3>
                                        <span class="fs-7 fw-bold text-gray-400">Upload only 1 file</span>
                                    </div>
                                    <!--end::Info-->
                                </div>
                            </div>
                            <!--end::Dropzone-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection

