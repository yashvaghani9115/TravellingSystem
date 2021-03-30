@extends('layouts.master')

@section('title')
			Travello
@endsection()

@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Dashboard</h4>
                <h5>Users<div style="display:inline;margin-left:90%">{{$users}}</div></h5>
                <h5>Citys<div style="display:inline;margin-left:90.7%">{{$citys}}</div></h5>
                <h5>Packages<div style="display:inline;margin-left:85.5%">{{$package}}</div></h5>
                <h5>Total Number Of Booking<div style="display:inline;margin-left:68%">{{$bookpackage}}</div></h5>
              </div>
          </div>
        </div>

@endsection()

@section('scripts')


@endsection()