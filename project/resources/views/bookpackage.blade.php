@extends('layouts.app')
@section('content')
<div id="fh5co-tours" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
                <h3>Summary</h3>
            </div>
        </div>
            <div class="animate-box">
                <span style="font-weight:bold;font-size:30px">Package Name:</span><div style="font-size:20px">{{$bookpackage->package->name}}</div><br>
                <span style="font-weight:bold;font-size:30px">Price:</span><div style="font-size:20px;font-weight:500">₹{{$bookpackage->price}}</div><br>
                <span style="font-weight:bold;font-size:30px">Departure Date:</span><div style="font-size:20px;font-weight:500">{{$bookpackage->departure_date}}</div>
                <br><a href="/allbooking" class="btn btn-danger">Continue</a>
            </div>
        </div>
    </div>
</div>
@endsection
