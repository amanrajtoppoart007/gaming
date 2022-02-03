@extends("admin.layout.app")
@section("content")
    <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">

        <div class="container-xxl">

            <div class="flex-row-fluid">

                <div class="card mb-5 mb-xxl-8">

                    <div class="card-body bg-white p-12">
                        <form action="{{route('admin.puzzle.store')}}" id="puzzle_form" method="post"
                              enctype="multipart/form-data">

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div>
                                         <label for="level" class="required form-label">Level</label>
                                        <input type="text" class="form-control" id="level" name="level" placeholder=""/>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div>
                                        <label for="description" class="required form-label">Description</label>
                                        <textarea class="form-control" id="description" name="description"
                                                  aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div class="fv-row">

                                        <label  class="required form-label">Question Image</label>
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="question_dropzone">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <!--end::Icon-->

                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop file here to
                                                        upload Puzzle Image
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

                            <div class="row mb-5">
                                <div class="col-md-6">
                                    <div class="fv-row">
                                          <label  class="required form-label">Solution Image</label>
                                        <!--begin::Dropzone-->
                                        <div class="dropzone" id="solution_image_dropzone">
                                            <!--begin::Message-->
                                            <div class="dz-message needsclick">
                                                <!--begin::Icon-->
                                                <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                <!--end::Icon-->

                                                <!--begin::Info-->
                                                <div class="ms-4">
                                                    <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop file here to
                                                        upload Puzzle Solution
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

                            <div class="row mb-5">
                                <div class="col-md-6">

                                    <label  class="required form-label">Options</label>

                                    <table class="table table-bordered">
                                        <thead class="bg-primary">
                                        <tr>
                                            <th class="px-1 text-white">
                                                Select Correct Answer
                                            </th>
                                            <th class="px-1 text-white">
                                                Option
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @php  $i=0; @endphp
                                        @foreach(App\Models\Option::OPTIONS as $key=>$value)
                                            <tr>
                                                <td>
                                                    <div class="form-check form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="radio"
                                                               name="correct_answer"
                                                               value="{{$key}}" id="answer_option_{{$key}}"/>
                                                        <label class="form-check-label" for="answer_option_{{$key}}">
                                                            {{$value}}
                                                        </label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <input type="text" name="option[{{$i}}]"
                                                           class="form-control form-control-solid"
                                                           placeholder="Enter option"/>
                                                </td>
                                            </tr>
                                            @php $i++; @endphp
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary">Create New Level</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@section("script")
    <script>
        let uploadedImagesMap = {}
        let questionDropzone = new Dropzone("#question_dropzone", {
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

        let solutionDropzone = new Dropzone("#solution_image_dropzone", {
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
                $('#puzzle_form').find('input[name=solution]').remove();
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

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $("#puzzle_form").on("submit", function (e) {
                e.preventDefault();
                const form = new FormData(document.getElementById('puzzle_form'));
                $.ajax({
                    url: "{{route('admin.puzzle.store')}}",
                    method: "POST",
                    data: form,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (result) {
                        if (result?.status === 1) {
                            $("#add_puzzle_modal").modal('hide');
                            Swal.fire({
                                title: 'Success!',
                                text: result?.message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok,Got it",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                            window.location.href = window.location.href;
                        } else {
                            if (result?.response === "validation_error") {
                                Swal.fire({
                                    title: 'Validation Error',
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
                    error: function (jqXHR, textStatus, errorThrown) {
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
