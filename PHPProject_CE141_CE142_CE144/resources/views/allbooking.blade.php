@extends('layouts.app')
@section('content')
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>Your All Booking</h3>
					</div>
				</div>
				<div class="row animate-box" style="background-color:white">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead class=" text-primary">
                                <!-- fetch table data -->
                                <th>Package Name</th>
                                <th>Price (per person)</th>
                                <th>Departure Date</th>
                                <th>Booking Date</th>
                              </thead>
                              <tbody>
                                <!--fetch table data -->
                                @foreach($bookpackage as $row)
                                <tr>
                                  <td>{{ $row->package->name }}</td>
                                  <td>₹{{ $row->price }}</td>
                                  <td>{{ $row->departure_date }}</td>
                                  <td>{{ $row->created_at}}</td>
                                 </tr>
                                 @endforeach()
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
			</div>
		</div>
@endsection
