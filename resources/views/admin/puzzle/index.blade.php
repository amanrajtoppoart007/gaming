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
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add_puzzle_modal">
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
        <th>Puzzle Image</th>
        <th>Solution Image</th>
        <th>Created Date</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody class="text-gray-600 fw-bold">
     @foreach ($puzzles as $puzzle)
         <tr>
             <th>#</th>
             <th>{{$puzzle->level}}</th>
             <th>
                 <img style="width: 100px;height: 100px;" src="{{$puzzle->getMedia('questions')->last()->getUrl()}}"/>
             </th>
             <th>
                 <img style="width: 100px;height: 100px;" src="{{$puzzle->getMedia('solutions')->last()->getUrl()}}"/>
             </th>
             <th>{{$puzzle->created_at->format('d-m-Y')}}</th>
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


    <form action="{{route('admin.puzzle.store')}}" id="puzzle_form" method="post" enctype="multipart/form-data">
        @csrf
        <div class="modal fade" tabindex="-1" id="add_puzzle_modal">
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
                            <div class="dropzone" id="question_dropzone">
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
                            <div class="dropzone" id="solution_image_dropzone">
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

                    <div class="col-md-6 my-5">
                        @php $i=0; @endphp
                        @foreach(App\Models\Option::OPTIONS as $key=>$value)
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-check form-check-custom form-check-solid">
                                        <input class="form-check-input" type="radio" name="correct_answer"
                                               value="{{$key}}" id="answer_option_{{$key}}"/>
                                        <label class="form-check-label" for="answer_option_{{$key}}">
                                            {{$value}}
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="mb-10">
                                        <input type="text" name="option[{{$i}}]" class="form-control form-control-solid"
                                               placeholder="Enter option"/>
                                    </div>
                                </div>
                            </div>
                           @php $i++; @endphp
                            @endforeach
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Create new puzzle</button>
            </div>
        </div>
    </div>
</div>
    </form>

@endsection
@section("script")
    <script>
        var uploadedImagesMap = {}
        var myDropzone = new Dropzone("#question_dropzone", {
            url: '{{ route('admin.media.upload') }}',
             maxFiles: 1,
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function (file, response) {
                $('#puzzle_form').append('<input type="hidden" name="question" value="' + response.name + '">')
                uploadedImagesMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                let name = '';
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedImagesMap[file.name]
                }
                $('#puzzle_form').find('input[name="question"]').remove()
            },
            init: function () {

            },
            error: function (file, response) {
                let message;
                if ($.type(response) === 'string') {
                    message = response; //dropzone sends it's own error messages in string
                } else {
                    message = response.errors.file;
                }
                file.previewElement.classList.add('dz-error')
                const _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]');
                const _results = [];
                let node;
                for (let _i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        });

         var myDropzone = new Dropzone("#solution_image_dropzone", {
            url: '{{ route('admin.media.upload') }}',
             maxFiles: 1,
            maxFilesize: 2, // MB
            acceptedFiles: '.jpeg,.jpg,.png,.gif',
            addRemoveLinks: true,
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            },
            params: {
                size: 2,
                width: 4096,
                height: 4096
            },
            success: function (file, response) {
                $('#puzzle_form').append('<input type="hidden" name="solution" value="' + response.name + '">')
                uploadedImagesMap[file.name] = response.name
            },
            removedfile: function (file) {
                file.previewElement.remove()
                let name = '';
                if (typeof file.file_name !== 'undefined') {
                    name = file.file_name
                } else {
                    name = uploadedImagesMap[file.name]
                }
                $('#puzzle_form').find('input[name="solution"]').remove();
            },
            init: function () {

            },
            error: function (file, response) {
                let message;
                if ($.type(response) === 'string') {
                    message = response; //dropzone sends it's own error messages in string
                } else {
                    message = response.errors.file;
                }
                file.previewElement.classList.add('dz-error')
                const _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]');
                const _results = [];
                let node;
                for (let _i = 0, _len = _ref.length; _i < _len; _i++) {
                    node = _ref[_i]
                    _results.push(node.textContent = message)
                }

                return _results
            }
        });

         $(document).ready(function(){
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': "{{ csrf_token() }}"
                 }
             });
             $("#puzzle_form").on("submit",function(e){
                 e.preventDefault();
                 const form = new FormData(document.getElementById('puzzle_form'));
                 $.ajax({
                     url: "{{route('admin.puzzle.store')}}",
                     method:"POST",
                     data: form,
                     cache: false,
                     processData: false,
                     contentType: false,
                     success:function(result)
                     {
                        if(result?.status===1)
                        {
                            $("#add_puzzle_modal").modal('hide');
                            Swal.fire({
                                    title:'Success!',
                                     text: result?.message,
                                     icon: "success",
                                     buttonsStyling: false,
                                     confirmButtonText: "Ok,Got it",
                                     customClass: {
                                         confirmButton: "btn btn-primary"
                                     }
                                 });
                            window.location.href=window.location.href;
                        }
                        else
                        {
                            if(result?.response==="validation_error")
                            {
                                Swal.fire({
                                    title:'Validation Error',
                                     text: result?.message,
                                     icon: "error",
                                     buttonsStyling: false,
                                     confirmButtonText: "Ok, got it!",
                                     customClass: {
                                         confirmButton: "btn btn-primary"
                                     }
                                 });
                            }
                        }
                     },
                     error:function(jqXHR, textStatus,errorThrown)
                     {
                         Swal.fire({
                                     text: textStatus,
                                     icon: "error",
                                     buttonsStyling: false,
                                     confirmButtonText: "Ok, got it!",
                                     customClass: {
                                         confirmButton: "btn btn-primary"
                                     }
                                 });

                     }
                 });
             })
         })
    </script>
    @endsection

