@extends('master')
@section('main')
    <div class="container">
        <form action="{{route('dueadd')}}" method="Post">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="name">Customer Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Customer Name">
                        <input type="hidden" name="date" class="form-control" value="{{date("Y-m-d")}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input type="text" name="purpose" class="form-control" id="purpose"
                               placeholder="Purpose">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" name="address" class="form-control" id="amount"
                               placeholder="Due Amount">
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
