@extends('layouts.app')
@section('content')
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url({{asset('storage/city_cover/'.$city->cover_img) }});">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h3 style="font-size:50px">{{$city->name}} Holiday Packages</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-tours" class="fh5co-section-gray">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>{{$city->name}} Tour Packages</h3>
						<p>{{$city->description}}</p>
					</div>
				</div>
				<div class="row animate-box" style="background-color:white">
                    <div class="col-md-12">
                      <div class="card">
                        <div class="card-header">
                          <h4 class="card-title" style="font-weight:bold">Popular {{$city->name}} Packages</h4>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table">
                              <thead class=" text-primary">
                                <!-- fetch table data -->
                                <th>{{$city->name}} Packages</th>
                                <th>Price (per person)</th>
                                <th>Nights</th>
                                <th>Inclusions</th>
                              </thead>
                              <tbody>
                                <!--fetch table data -->
                                @foreach($package as $row)
                                <tr>
                                  <td>{{ $row->name }}</td>
                                  <td>₹{{ $row->price }}</td>
                                  <td>{{ $row->nights }} Nights</td>
                                  <td>{{ $row->inclusions }}</td>
                                  <td>
                                    <a href="/packagedetails/{{$row->id}}" class="btn btn-danger">View details</a>
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
			</div>
		</div>
@endsection
