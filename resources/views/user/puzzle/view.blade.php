@extends("user.layout.app")
@section("css")
    <link href="{{asset('assets/library/stepbar-timer-loader/stepbar-timer-loader.css')}}" rel="stylesheet" type="text/css"/>
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
                                <button id="check_answer" class="btn btn-lg btn-primary btn-hover-scale me-5">Check Answer</button>
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
@section("script")
    <script src="{{asset('assets/library/stepbar-timer-loader/stepbar-timer-loader.js')}}"></script>
    <script>

            $(document).ready(function(){
             $.ajaxSetup({
                 headers: {
                     'X-CSRF-TOKEN': "{{ csrf_token() }}"
                 }
             });
             $("#check_answer").on("click",function(e){
                 e.preventDefault();
                 const form = new FormData();
                 form.append('puzzle_id',{{$puzzle->id}});
                 form.append('option_id',$('input[name=answer]:checked').val());
                 $.ajax({
                     url: "{{route('puzzle.check')}}",
                     method:"POST",
                     data: form,
                     cache: false,
                     processData: false,
                     contentType: false,
                     success:function(result)
                     {
                        if(result?.status===1)
                        {

                            let html = '';

                            if(result?.next_url)
                            {
                                html = `<span class="text-primary">${result?.message}</span></br> <a class="btn btn-success btn-lg" href="${result?.next_url}">Next Puzzle</a>`
                            }
                            else
                            {
                                html = `<span class="text-primary">${result?.message}</span>`;
                            }


                            Swal.fire({
                                title: 'Success!',
                                html: html,
                                text: result?.message,
                                icon: "success",
                                buttonsStyling: false,
                                confirmButtonText: "Ok,Got it",
                                customClass: {
                                    confirmButton: "btn btn-primary"
                                }
                            });
                        }
                        else
                        {
                                Swal.fire({
                                    title:'Error',
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
             });
             progress(360, 360, $('#timerProgressBar'));
         });



    </script>
@endsection
