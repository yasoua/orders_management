@extends('components.master')
@section('content')
    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
{{--            <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>--}}
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body ">
                    <h6 class="card-title">Bordered table</h6>
                    <p class="text-muted mb-3">Add class <code>.table-bordered</code></p>
                    <div class="row col-12 table-responsive overflow-visible pt-3">
                        <table class="table table-hover mb-0">
                            <thead>
                            <tr>
                                <th class="pt-0">#</th>
                                @if(auth()->user()->role->name == 'admin')
                                <th class="pt-0">Customer</th>
                                @endif
                                <th class="pt-0">Url</th>
                                <th class="pt-0">Create Date</th>
                                <th class="pt-0">Status</th>
                                <th class="pt-0">Option</th>

                            </tr>
                            </thead>
                            <tbody>
                            @if($Orders->count() == 0 )
                                <tr>
                                    <td colspan="6"><div class="d-flex justify-content-center fw-bold ">There is no orders</div></td>
                                </tr>
                            @endif
{{--                            @while() @endwhile--}}
                                @foreach($Orders as $order)
{{--                                    @if(auth()->user()->role->name == 'admin')--}}
{{--                                        @break(true)--}}
{{--                                        @if($order->added_by !== auth()->user()->id && auth()->user()->role->name == 'customer' )--}}
{{--                                            @continue(true)--}}
{{--                                                    <tr>--}}
{{--                                                    <td colspan="6"><div class="d-flex justify-content-center fw-bold ">There is no orders</div></td>--}}
{{--                                                --}}{{--                                                    </tr>--}}
{{--                                        @endif--}}
                                    <tr>
    {{--                                                    @break(true)--}}
    {{--                                            @endif--}}
    <td>{{$order->id}}</td>
    @if(auth()->user()->role->name == 'admin')
    <td>{{$order->user->name}}</td>
    @endif
    <td>{{$order->url}}</td>
    <td>{{$order->created_at}}</td>
    <td>
        {{--                                    @if($order->status->name == 'pending')--}}
        <span class="badge {{$order->status->color}}">{{$order->status->name}}</span>
        {{--                                    @elseif($order->status->name == 'proccessing')--}}
        {{--                                        <span class=" badge " style="background-color: {{ $order->status->color }}">{{$order->status->name}}</span>--}}
        {{--                                    @endif--}}
    </td>
    <td>

        <div class="dropdown mb-2">
            <button class="btn btn-link p-0" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal icon-lg text-muted pb-3px"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="">
                <a href="{{route('order.show',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye icon-sm me-2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg> <span class="">View</span></a>
                @if(auth()->user()->role->name == 'admin')
                    <a href="{{route('order.edit',$order->id)}}" class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 icon-sm me-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg> <span class="">Edit</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash icon-sm me-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path></svg> <span class="">Delete</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-printer icon-sm me-2"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg> <span class="">Print</span></a>
                    <a class="dropdown-item d-flex align-items-center" href="javascript:;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-download icon-sm me-2"><path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path><polyline points="7 10 12 15 17 10"></polyline><line x1="12" y1="15" x2="12" y2="3"></line></svg> <span class="">Download</span></a>
                @endif
            </div>
        </div></td>
</tr>
{{--                                    @else--}}

                                @endforeach


{{--                                    @endif--}}
                            </tbody>

                        </table>


                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

