@extends('master')
@section('main')
    <div class="container">
        <form action="{{route('mobileadd')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="bkash">Bkash</label>
                        <input type="text" name="bkash" class="form-control" id="bkash" placeholder="Bkash Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="nagad">Nagad</label>
                        <input type="text" name="nagad" class="form-control" id="nagad" placeholder="Nagad Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="rocket">Rocket</label>
                        <input type="text" name="rocket" class="form-control" id="rocket" placeholder="Rocket Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="upay">Upay</label>
                        <input type="text" name="upay" class="form-control" id="upay" placeholder="Upay Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="tap">Tap</label>
                        <input type="text" name="tap" class="form-control" id="tap" placeholder="Tap Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="desco">Desco</label>
                        <input type="text" name="desco" class="form-control" id="desco" placeholder="Desco Balance">
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
