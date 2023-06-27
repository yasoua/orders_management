@extends('components.master')
@section('content')
    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title">New Order</h6>
                    <form method="post" action="{{ route('order.store') }}" >
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="mb-3">
                            <label class="form-label">Url</label>
                            <input type="text" class="form-control" name="url" placeholder="Pasts your link .... ">
                                    @error('url')
                                    <p class="text-danger text-xs py-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Specs</label>
                                    <input type="text" class="form-control" name="specs" placeholder="like: size, quantity, color, etc..">
                                    @error('specs')
                                    <p class="text-danger text-xs py-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Notes</label>
                                    <input type="text" class="form-control" name="notes" placeholder="Enter notes">
                                    @error('specs')
                                    <p class="text-danger text-xs py-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
{{--                        <div class="row">--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label class="form-label">Cost</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="Enter cost">--}}
{{--                                </div>--}}
{{--                            </div><!-- Col -->--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label class="form-label">Shipping cost</label>--}}
{{--                                    <input type="text" class="form-control" placeholder="Enter Shipping cost">--}}
{{--                                </div>--}}
{{--                            </div><!-- Col -->--}}
{{--                            <div class="col-sm-4">--}}
{{--                                <div class="mb-3">--}}
{{--                                    <label class="form-label">Expect_delevery_date</label>--}}
{{--                                    <input type="date" class="form-control" placeholder="Enter Expect_delevery_date">--}}
{{--                                </div>--}}
{{--                            </div><!-- Col -->--}}
{{--                        </div><!-- Row -->--}}
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">City</label>
                                    <input type="text" class="form-control" name="city" placeholder="Enter City">
                                    @error('city')
                                    <p class="text-danger text-xs py-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                            <div class="col-sm-6">
                                <div class="mb-3">
                                    <label class="form-label">Address</label>
                                    <input type="text" class="form-control" name="address" placeholder="Address">
                                    @error('address')
                                    <p class="text-danger text-xs py-2">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div><!-- Col -->
                        </div><!-- Row -->
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Payment</label>
                            <select class="form-select"  name="payment_id" id="exampleFormControlSelect1">
                                <option selected value="{{ $payment[0]->id }}">{{$payment[0]->name}}</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlSelect1" class="form-label">Payment</label>
                            <select class="form-select"  name="payment_id" id="exampleFormControlSelect1">
                                <option selected value="{{ $status[0]->id }}">{{$status[0]->name}}</option>
                            </select>
                        </div>

                        <input type="submit" class="btn btn-primary submit" value="Submit form">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
