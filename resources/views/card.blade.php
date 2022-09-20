@extends('master')
@section('main')
    <div class="container">
        <form action="{{route('addcard')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="nine">9</label>
                        <input type="text" name="nine" class="form-control" id="nine" placeholder="Enter Quantity">
                        <input type="hidden" name="date" id="" value="{{date('Y-m-d')}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="nineteen">19</label>
                        <input type="text" name="nineteen" class="form-control" id="nineteen"
                               placeholder="Enter Quantity">


                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="twentynine">29</label>
                        <input type="text" name="twentynine" class="form-control" id="twentynine"
                               placeholder="Enter Quantity">

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
