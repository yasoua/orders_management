@extends('components.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a  href="{{route('order.show',$order->id)}}">Order</a></li>


            <li class="breadcrumb-item"><a href="{{route('order.show',$order->id)}}">Back to order</a></li>
            {{--            <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>--}}
        </ol>
    </nav>
    <div class="card">
        <div class="card-body">
            <form id="edit_form" {{--enctype="multipart/form-data"--}} action="{{route('order.update', $order->id)}}" method="POST">
                @method('PUT')
                @csrf
            <div class="row ">
                <div class="col-10 form-group ">

{{--                    <label class="fw-bold"> Customer Name </label>--}}
{{--                    <p class=" p-2 mb-3 border border-1 rounded-2"></p>--}}
{{--                    <input type="text" class="form-control mb-3 disabled" disabled name="added_by" value="{{$order->user->name}}"/>--}}
{{--                    @error('added_by')--}}
{{--                    <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>--}}
{{--                    @enderror--}}
                </div>
{{--                <div class="col-2 d-flex justify-content-center">--}}
{{--                    @if(auth()->user()->role->name == 'admin')--}}
{{--                    <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
{{--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>--}}
{{--                    </button>--}}

{{--                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">--}}
{{--                        --}}{{--                        <a  class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>--}}
{{--                        <a href="{{route('order.edit',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Invoice</span></a>--}}
{{--                        <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>--}}
{{--                    </div>--}}
{{--                    @endif--}}
{{--                </div>--}}

            </div>
            <div class="row mt-1">
                <div class="col-12">
                    <div class="form-group col-md-12">
                        <label class="fw-bold"> Url </label>
                        <input type="text" class="form-control mb-3" name="url" value="{{$order->url}}"/>
                        @error('url')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-4 p-2 ">
                    <div class="form-group ">
                        <label class="fw-bold"> Specs </label>
                        <input type="text" class="form-control mb-3 " name="specs" value="{{$order->specs}}"/>
                        @error('specs')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="form-group ">
                        <label class="fw-bold"> City </label>
                        <input type="text" class="form-control mb-3" name="city" value="{{$order->city}}"/>
                        @error('city')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label class="fw-bold"> Address </label>
                        <input type="text" class="form-control mb-3" name="address" value="{{$order->address}}"/>
                        @error('address')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="col-4 p-2">
                    <div class="form-group ">
                        <label class="fw-bold"> Notes </label>
                        <input type="text" class="form-control mb-3" name="notes" value="{{$order->notes}}"/>
                        @error('notes')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>


                    <div class="form-group ">
                        <label class="fw-bold"> Cost </label>
                        <input type="text" disabled class="form-control mb-3 cost" name="cost" value="{{$order->cost}}"/>
                        @error('cost')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group ">
                        <label class="fw-bold"> Shipping_Cost </label>
                        <input type="text" disabled class="form-control mb-3 shipping_cost" name="shipping_cost" value="{{$order->shipping_cost}}"/>
                        @error('shipping_cost')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>


                </div>
                <div class="col-4 p-2 ">
                    <label class="fw-bold"> Status </label>

                    <select id="status"
                            class="form-control mb-3 dropdown-toggle status_status {{-- {{ $order->status->color }}--}}"
                            name="status_id"
                            value="{{$order->status->name}}"
                    >
                        @foreach($status as $statue)
                            <option   @if($order->status_id == $statue->id) selected class="bg-white" @endif value="{{$statue->id}}" >{{$statue->name}}</option>
                        @endforeach
                    </select>
                    <div class="form-group ">
                        <label class="fw-bold"> Expect_Delivery_Date </label>
                        <input type="date" disabled class="form-control mb-0 expect_delivery_date" name="expect_delivery_date" value="{{$order->expect_delivery_date}}"/>
                        @error('expect_delivery_date')
                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>
                        @enderror
                    </div>
{{--                    <div class="form-group ">--}}
{{--                        <label class="fw-bold"> Last_Updates_By </label>--}}
{{--                        <p class=" p-2 mb-3 border border-1 rounded-2">{{auth()->user()->name}}</p>--}}

{{--                        --}}{{--                        <input type="text" class="form-control mb-3 disabled" name="last_updates_by" disabled value="{{auth()->user()->name}}"/>--}}
{{--                        @error('last_updates_by')--}}
{{--                        <p class="text-xs mt-1 mb-3 text-danger py-2">{{ $message }}</p>--}}
{{--                        @enderror--}}
{{--                    </div>--}}
                    <div class="d-flex mt-5" dir="ltr">
                        <div class="col-6 d-flex justify-content-start">
                            <input type="submit" name="submit_button" id="submit_button"  class="btn btn-primary" style="width: 80%" value="Save" />
                        </div>
                        <div class="col-6 d-flex justify-content-end">
                            <a href="{{ route('order.show',$order->id) }}" type="button" class="btn btn-secondary" style="width: 80%">Cancel</a>
                        </div>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script>
        $('.status_status').on('change',function () {
            if(this.value == 2 ){
                $('.cost').prop("disabled" , false)
                $('.shipping_cost').prop("disabled" , false)
                $('.expect_delivery_date').prop("disabled" , false)

            }else {
                $('.cost').prop("disabled" , true)
                $('.shipping_cost').prop("disabled" , true)
                $('.expect_delivery_date').prop("disabled" , true)

            }
        })

    </script>
@endsection

