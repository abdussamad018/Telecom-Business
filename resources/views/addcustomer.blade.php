@extends('master')
@section('main')
    <div class="container">
        <form action="{{route('addcustomer')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="name">Customer Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Customer Name">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="robi">Mobile Number</label>
                        <input type="text" name="phone" class="form-control" id="phone"
                               placeholder="Customer Phone Number" maxlength="11">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" name="address" class="form-control" id="address"
                               placeholder="Customer Address">
                    </div>
                </div>
            </div>
            <div></div>
            <div class="row">
                <div class="col-lg-12">
                    <input class="btn btn-primary float-right" type="submit" name="" id="" value="Submit">
                </div>
            </div>
        </form>
    </div>
@endsection
