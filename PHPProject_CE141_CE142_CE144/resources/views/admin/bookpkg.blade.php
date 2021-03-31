@extends('layouts.master')

@section('title')
			Travello
@endsection()



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">{{Auth::user()->name}}'s Booking</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <!-- fetch table data -->
                      <th>Id</th>
                      <th>Package Name</th>
                      <th>Price</th>
                      <th>Departure Date</th>
                      <th>Booking Date</th>
                    </thead>
                    <tbody>
                      <!--fetch table data -->
                      @foreach($bookpackage as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->package->name }}</td>
                        <td>₹ {{ $row->price }}</td>
                        <td>{{ $row->departure_date}}</td>
                        <td>
                          {{$row->created_at}}
                        </td>
                       </tr>
                       @endforeach()
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>

@endsection()

@section('scripts')


@endsection()