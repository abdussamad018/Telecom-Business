@extends('master')
@section('main')
    <div class="container">
        <form action="{{route('addexpense')}}" method="post">
            @csrf
            <div class="row">

                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="purpose">Purpose</label>
                        <input type="text" name="purpose" class="form-control" id="purpose"
                               placeholder="Purpose">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="amount">Amount</label>
                        <input type="text" name="amount" class="form-control" id="amount"
                               placeholder="Amount">

                        <input type="hidden" name="date" class="form-control" value="{{date('Y-m-d')}}">
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
