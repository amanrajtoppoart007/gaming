@extends("admin.layout.app")
@section("content")
    <form method="post" action="{{route('admin.password.change')}}" id="password_change_form">
        @csrf
        @method("PATCH")
    <div class="card shadow-sm">

        <div class="card-header">
            <h3 class="card-title">Change Password</h3>
            <div class="card-toolbar">
                <a title="Back to home" href="{{route('admin.dashboard')}}" type="button" class="btn btn-sm btn-light">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="input-group mb-5">
                        <span class="input-group-text" id="basic-addon1">@</span>
                        <input type="password" class="form-control" name="current_password" placeholder="Current Password"
                               aria-label="Current Password" aria-describedby="basic-addon1">
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-4">
                    <div class="col-md-8 input-group mb-5">
                        <span class="input-group-text" id="basic-addon2">@</span>
                        <input type="password" class="form-control" name="new_password" placeholder="New Password" aria-label="New Password"
                               aria-describedby="basic-addon2">
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-4">
                    <div class="col-md-8 input-group mb-5">
                        <span class="input-group-text" id="basic-addon3">@</span>
                        <input type="password" class="form-control" name="confirm_new_password" placeholder="Confirm New Password"
                               aria-label="Confirm New Password" aria-describedby="basic-addon3">
                    </div>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </div>
    </div>
    </form>
@endsection

@section("script")
    <script>
        $(document).ready(function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                }
            });
           $("#password_change_form").on("submit",function(e){
             e.preventDefault();
             const form = new FormData(document.getElementById('password_change_form'));
                $.ajax({
                    url: "{{route('admin.password.change')}}",
                    method: "POST",
                    data: form,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (result) {
                        if (result?.status === 1) {
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
                            window.location.href = '{{route('admin.dashboard')}}';
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
                    error: function (jqXHR, textStatus) {
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
        });
    </script>
@endsection
