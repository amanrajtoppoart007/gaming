@extends("user.layout.app")
@section("css")
    <link href="{{asset('assets/library/stepbar-timer-loader/stepbar-timer-loader.css')}}" rel="stylesheet"
          type="text/css"/>
@endsection
@section("content")
    <div class="content fs-6 d-flex flex-column-fluid" id="kt_content">

        <div class="container-xxl">

            <div class="flex-row-fluid">

                <div class="card mb-5 mb-xxl-8">

                    <div class="card-body  bg-white p-12">

                        <div class="d-flex  flex-column flex-md-row flex-lg-column flex-xxl-row">
                            <div class="col-md-6">
                                <img src="{{$puzzle->getMedia('questions')->last()->getUrl()}}" alt=""
                                     class="mw-500 w-500px"/>
                                <span>
                                    {{$puzzle->description}}
                                </span>
                            </div>

                            <div class="card shadow-none w-auto  w-lg-auto ml-auto">

                                <div class="card-body bg-light px-12 py-10 w-500px">
                                    <h3 class="fw-bolder fs-1 mb-1">
                                        <a href="#" class="text-gray-800">Level {{$puzzle->level}}</a>
                                    </h3>
                                    <span class="text-gray-600 my-2">Select from One of The Following</span>
                                    <!--begin::Radio group-->
                                    <div data-kt-buttons="true">
                                        <!--begin::Radio button-->
                                        @foreach($puzzle->options as $option)
                                            <label
                                                class="btn btn-outline btn-outline-dashed bg-white d-flex flex-stack text-start p-6 mb-5">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-primary me-6">
                                                        <input class="form-check-input" type="radio" name="answer"
                                                               value="{{$option->id}}"/>
                                                    </div>
                                                    <!--end::Radio-->

                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <h2 class="d-flex align-items-center fs-3 fw-bolder flex-wrap">
                                                            {{$option->option}}
                                                        </h2>

                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->

                                                <!--begin::Price-->

                                                <!--end::Price-->
                                            </label>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row my-5 justify-content-end">
                            <div class="col-md-8">
                                <button id="check_answer" class="btn btn-lg btn-primary btn-hover-scale me-5">Check
                                    Answer
                                </button>
                            </div>
                            <div class="col-md-4">
                                <div id="timerProgressBar" class="timer-progress-bar">
                                    <div class="bar"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
@endsection
@section("modal")
    <div class="modal fade" tabindex="-1" id="answer_view_modal" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h5 id="answer_title_view" class="modal-title text-white fw-bold">Success !</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">

                    <div id="answer_message_view">Modal body text goes here.</div>
                    <div class="row">
                        <div class="col text-center">
                            <img id="solutionImageView" src="{{$puzzle->getMedia('questions')->last()->getUrl()}}"
                                 alt=""
                                 class="mw-250 w-250px"/>
                        </div>
                        <div class="col">
                            <table id="puzzle_answer_response_view" class="table table-row-dashed">
                                <tbody>
                                <tr>
                                    <th>Score</th>
                                    <td id="user_score">0</td>
                                </tr>
                                <tr>
                                    <th>Started At</th>
                                    <td id="started_at">0</td>
                                </tr>
                                <tr>
                                    <th>Completed At</th>
                                    <td id="completed_at">0</td>
                                </tr>
                                <tr>
                                    <th>Time Taken</th>
                                    <td id="time_taken">0</td>
                                </tr>
                                <tr>
                                    <th>Over All Attempts</th>
                                    <td id="over_all_attempts">0</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("script")
    <script src="{{asset('assets/library/stepbar-timer-loader/stepbar-timer-loader.js')}}"></script>
    <script>

        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
            $("#check_answer").on("click", function (e) {
                e.preventDefault();
                $("#nextPuzzleUrl").hide();
                $("#solutionImageView").hide();
                //$("#puzzle_answer_response_view").hide();
                const form = new FormData();
                form.append('puzzle_id', {{$puzzle->id}});
                form.append('option_id', $('input[name=answer]:checked').val());
                $.ajax({
                    url: "{{route('puzzle.check')}}",
                    method: "POST",
                    data: form,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (result) {
                        if (result?.status === 1) {
                            const {data} = result;


                            $("#answer_message_view").text(result?.message);

                            $("#nextPuzzleUrl").attr({href: data?.nextPuzzleUrl});
                            $("#solutionImageView").attr({src: data?.image});

                            $("#user_score").html(data?.rating);
                            $("#started_at").text(data?.startedAt)
                            $("#completed_at").text(data?.completedAt);
                            $("#time_taken").text(data?.timeTaken);
                            $("#over_all_attempts").text(data?.overallAttempts);
                            $("#nextPuzzleUrl").show();
                            $("#solutionImageView").show();
                            $("#puzzle_answer_response_view").show();
                            $("#answer_view_modal").modal("show");


                        } else {
                            Swal.fire({
                                title: 'Error',
                                text: result?.message,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText: "Ok, got it!",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });

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
            });
            progress(360, 360, $('#timerProgressBar'));
        });


    </script>
@endsection
