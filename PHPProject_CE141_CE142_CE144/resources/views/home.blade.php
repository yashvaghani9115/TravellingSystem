@extends('layouts.app')
@section('content')
		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover" data-stellar-background-ratio="0.5" style="background-image: url(images/Holidays.jpg);">
				<div class="desc">
					<div class="container">
						<div class="row">
							<div class="desc2 animate-box">
								<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
									<h3 style="font-size:50px">Holidays Packages In India</h3>
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
						<h3>India Tour Packages</h3>
						<p>You have booked your flights and hotels, now the next thing you seek to do is scour through tour packages and book one. If it is domestically you plan to travel, you will find innumerable holiday packages, but very few that match your requirement, or for that matter your interests and personality.</p>
					</div>
				</div>
				<div class="row">
					@foreach ($citys as $city)
					<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
						<div href="#"><img src="{{asset('storage/city/'.$city->img_path) }}" class="img-responsive">
							<div class="desc">
								<h3>{{$city->name}}</h3>
								<a class="btn btn-primary btn-outline" href="/showpackages/{{$city->id}}">Read More</a>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
@endsection
