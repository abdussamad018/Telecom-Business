@extends('master')
@section('main')

    <div class="container">
        <form action="{{route('cashadd')}}" method="Post">
            @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="cash">Cash</label>
                    <input type="text" name="cash" class="form-control" id="cash" placeholder="Cash Amount">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="form-group">
                    <label for="cashin">Cash In</label>
                    <input type="text" name="cashin" class="form-control" id="cashin" placeholder="Cash In Amount">
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
