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
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody class="text-gray-600 fw-bold">
                @foreach ($users as $user)
                    <tr>
                        <th>#{{$user->id}}</th>
                        <th>{{$user->name}}</th>
                        <th>{{$user->email}}</th>
                        <th>{{$user->created_at->format('d M y')}}</th>
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
                        <th>
                            <a class="delete-user" data-id="{{$user->id}}" data-delete_url="{{route('admin.users.destroy',$user->id)}}" href="javascript:void(0)">
                                 <span class="svg-icon svg-icon-danger svg-icon-2hx">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                          <path d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z" fill="black"/>
                                           <path opacity="0.5" d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z" fill="black"/>
                                          <path opacity="0.5" d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z" fill="black"/>
                                    </svg>
                                 </span>
                            </a>
                        </th>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        <div class="card-footer">
           {!! $users->links() !!}
        </div>
    </div>
@endsection

@section("modal")
    <form id="delete_user_form"  method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" id="user_id" value=""/>
        <input type="hidden" name="user_delete_url" id="user_delete_url" value="" />
      @csrf
      @method("PUT")
    <div class="modal fade" tabindex="-1" id="delete_user_modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title text-white">Are You Sure?</h5>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal"
                         aria-label="Close">
                        <span class="svg-icon svg-icon-2x"></span>
                    </div>
                </div>

                <div class="modal-body">
                    <p>This action could not be reversed.</p>
                    <p>It will delete all related data of this user including scores.</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>
        </form>
@endsection

@section("script")
    <script>
        $(document).ready(function(){
            $('.delete-user').on('click',function(e){
                e.preventDefault();
                $("#user_id").val($(this).attr('data-id'));
                $("#user_delete_url").val($(this).attr('data-delete_url'));
                $("#delete_user_modal").modal("show");
            });
            $("#delete_user_form").on("submit",function(e){
                e.preventDefault();
                 const form = new FormData(document.getElementById('delete_user_form'));
                $.ajax({
                    url: `${$("#user_delete_url").val()}`,
                    method: "POST",
                    data: form,
                    cache: false,
                    processData: false,
                    contentType: false,
                    success: function (result) {
                          $("#delete_user_modal").modal("hide");
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
                            window.location.href =  window.location.href;
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
            })
        });
    </script>
@endsection
