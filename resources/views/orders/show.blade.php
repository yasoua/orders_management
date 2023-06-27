@extends('components.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('order.index')}}">Orders</a></li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>--}}
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <div class="row ">

                <div class="col-10 d-flex border-bottom pb-2">

                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                    <h3 class="px-1">{{$order->user->name}}</h3>

                </div>
                @if(auth()->user()->role->name == 'admin')
                <div class="col-2 d-flex justify-content-center">

                    <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                    </button>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                            {{--                        <a  class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>--}}
                        <a href="{{route('order.edit',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
                        @if($order->status->name == 'confirmed')
                        <a href="{{route('invoiceShow',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Invoice</span></a>
                        @endif
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                    </div>
                </div>
                @elseif(auth()->user()->role->name == 'customer')
                    <div class="col-2 d-flex justify-content-center">

                        <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                            @if($order->status->name == 'processing')
                            <a data-bs-toggle="modal" data-bs-target="#edit_modal" class="dropdown-item d-flex align-items-center" href=""><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Make Action</span></a>
                            @endif
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
                            @if($order->status->name == 'confirmed')
                                <a href="{{route('invoiceShow',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Invoice</span></a>
                            @endif
                            <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                        </div>
                    </div>
                    <div class="modal overflow-auto" id="edit_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title text-center" id="exampleModalLabel">Status</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="d-flex">
                                <form id="edit_form" action="{{route('confirmCustomer',$order->id)}}" method="POST">
                                    @csrf
                                    <div class="modal-footer ">
                                        <input type="submit" class="btn btn-success" value="Confirm" />
                                    </div>
                                </form>
                                <form id="edit_form" action="{{route('rejectCustomer',$order->id)}}" method="POST">
                                    @csrf
                                    <div class="modal-footer">
                                        <input type="submit"  class="btn btn-danger mx-5" value="Reject" />
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-times pr-2 shadow-sm"></i> close </button>
                                    </div>
                                </form>
                                </div>

                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <div class="row mt-4">
                <div class="col-12"><p class="p-3" >URL: {{$order->url}}</p></div>
            </div>

            <div class="row">
                <div class="col-6 p-2">
                    <p class="p-3" >Specs: {{$order->specs}}</p>
                    <p class="p-3" >Notes: {{$order->notes}}</p>
                    <p class="p-3" >city/{{$order->city}}</p>
                    <p class="p-3" >address/{{$order->address}}</p>
                    <p class="p-3" >created_at: {{$order->created_at}}</p>
                    <p class="p-3" >updated_at: {{$order->updated_at}}</p>

                </div>
                <div class="col-6 p-2">
                    <p class="p-3" >Status:
                        <span class=" badge {{ $order->status->color }}">{{$order->status->name}}</span>
                    </p>
                    @if($order->status->name !== 'pending' )
                    <p class="p-3" >Cost: ${{$order->cost}}</p>
                    <p class="p-3" >Shipping Cost: ${{$order->shipping_cost}}</p>
                    <p class="p-3" >Total: ${{$totalCost}}</p>
                    <p class="p-3" >Expect_Delivery_Date: {{$order->expect_delivery_date}}</p>
                    @endif
                    <p class="p-3" >Last_Updates_By: {{auth()->user()->name}}</p>

                </div>
        </div>
    </div>
    </div>
{{--    <script>--}}
{{--        $("#edit_form").on("submit", function(e) {--}}


{{--            $('#edit_submit_button').prop("disabled", true);--}}


{{--            e.preventDefault();--}}
{{--            var id = $("#edit_order_id").val();--}}
{{--            var url = "{{ route('order.update', ':id') }}";--}}
{{--            url = url.replace(':id', id);--}}


{{--            $.ajax({--}}
{{--                url: url,--}}
{{--                type: "POST",--}}
{{--                data: new FormData(this),--}}
{{--                contentType: false,--}}
{{--                cache: false,--}}
{{--                processData: false,--}}
{{--                success: function(data) {--}}

{{--                    if (data.status == 'success') {--}}
{{--                        location.reload();--}}
{{--                    }--}}

{{--                    // if(data.success)--}}
{{--                    // {--}}
{{--                    //     alert(data.success);--}}
{{--                    // }--}}
{{--                    // location.reload();--}}

{{--                    if (data.success) {--}}

{{--                        alert("successs");--}}
{{--                        --}}{{--$('#add_modal').html('<div class="w-100 text-center mt-3 alert alert-success alert-dismissible fade show" role="alert"><?php echo ('saved_alert'); ?><button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');--}}
{{--                        // $('#add_modal').html(test);--}}


{{--                        // setTimeout(function() {--}}
{{--                        location.reload();--}}
{{--                        // }, 1500);--}}


{{--                    }--}}
{{--                    // else {--}}
{{--                    //--}}
{{--                    //--}}
{{--                    //     $('#edit_submit_button').prop("disabled", false);--}}
{{--                    //--}}
{{--                    //--}}
{{--                    //     $('#add_modal .form-error').html('<div class="w-100 text-center mt-3 alert alert-danger alert-dismissible fade show" role="alert">' + data + '<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');--}}
{{--                    //--}}
{{--                    //--}}
{{--                    //     setTimeout(function() {--}}
{{--                    //         $('.form-error .alert-dismissible').remove();--}}
{{--                    //     }, 120000);--}}
{{--                    // }--}}
{{--                },--}}
{{--                error: function(response) {--}}
{{--                    alert('error');--}}
{{--                    alert(response);--}}
{{--                    console.log(response);--}}
{{--                    $.each(response.responseJSON.errors, function(key, value){ // view error response messages that comes from the request during validation--}}
{{--                        $('#' + key + '_feedback').html(value);--}}
{{--                    });--}}
{{--                    $('#edit_submit_button').prop("disabled", false);--}}
{{--                    // $('#add_modal').html(test);--}}
{{--                },--}}
{{--            });--}}
{{--        });--}}

{{--    </script>--}}
@endsection
