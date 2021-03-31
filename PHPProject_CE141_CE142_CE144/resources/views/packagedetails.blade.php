@extends('layouts.app')
@section('header')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /* Full-width input fields */
.form-container input[type=date]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=date]:focus{
  background-color: #ddd;
  outline: none;
}
    </style>
@endsection
@section('content')
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>{{$package->name}}</h3>
                        <h4 style="padding:5px 20px 5px;background-color: black;width:110px;color:white;margin-left:320px">{{$package->nights}} Nights</h4>
					</div>
				</div>
                <div class="row">
                    <div class="col-md-8 animate-box">
                        <img src="{{asset('storage/package/'.$package->img)}}" height="450px" width="750px"/>
                    </div>
                    <div class="col-md-4 animate-box">
                        <span class="fa fa-file-text" style="font-weight:bold;font-size:30px">&ensp;Description:</span><div style="font-size:20px">{{$package->description}}</div><br>
                        <span style="font-weight:bold;font-size:30px">Price:</span><div style="font-size:20px;font-weight:500">₹{{$package->price}}</div><br>
                        <span style="font-weight:bold;font-size:30px">Incusions:</span><div style="font-size:20px;font-weight:500">{{$package->inclusions}}</div>
                        <br><a class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Book Now</a>
                    </div>
                </div>
			</div>
		</div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">Availability from</h3>
                </div>
                <div class="modal-body">
                  <form action="/bookpackage" method="post"  class="form-container">@csrf
                    <label>Departure Date:</label><input type="date" name="date" required/>
                    <input type="hidden" name="package_id" value="{{$package->id}}"/>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <input type="submit" class="btn btn-success" value="Continue"/>
                </form>
                </div>
              </div>
            </div>
          </div>
@endsection
