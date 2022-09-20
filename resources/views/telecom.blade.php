@extends('master')
@section('main')
    <div class="container">
        <form action="{{route('telecomadd')}}" method="post">
            @csrf
            <div class="row">
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="gp">Gp</label>
                        <input type="text" name="gp" class="form-control" id="gp" placeholder="GP Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="robi">Robi</label>
                        <input type="text" name="robi" class="form-control" id="robi" placeholder="Robi Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="banglalink">Banglalink</label>
                        <input type="text" name="banglalink" class="form-control" id="banglalink" placeholder="Banglalink Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="upay">Airtel</label>
                        <input type="text" name="airtel" class="form-control" id="airtel" placeholder="Airtel Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="tap">Teletalk</label>
                        <input type="text" name="teletalk" class="form-control" id="teletalk" placeholder="Teletalk Balance">
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="desco">Paywell</label>
                        <input type="text" name="paywell" class="form-control" id="paywell" placeholder="Paywell Balance">
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
