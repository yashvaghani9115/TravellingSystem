@extends('layouts.master')

@section('title')
			Travello
@endsection()

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12"><!-- 12 row -->
			<div class="card">
				<div class="card-header">
					<h3>Edit City</h3>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-8"> <!--col-md-8 means 8 row  and form put into one row and updtate the button below-->
							<form action="/updatecity/{{$city->id}}" method="POST" enctype="multipart/form-data"><!-- here we update the button-->
								{{ csrf_field() }}
								{{ method_field('PUT') }}
						<div class="form-group">
				    		<label>name</label>
				    		<input type="text" name="name" value="{{$city->name}}" class="form-control"/>
				     	</div>
                        <div>
				    		<label>Image</label>
				    		<input type="file" name="img" class="form-control"/>
				     	</div>
						 <div>
							<label>Cover Image</label>
							<input type="file" name="cover_img" class="form-control"/>
						 </div>
                         <div class="form-group">
				    		<label>Description</label>
				    		<input type="textarea" name="description" value="{{$city->description}}" class="form-control"/>
				     	</div>
				     	<button type="Submit" class="btn btn-success">Submit</button>
				     	<a href="/tablelist" class="btn btn-danger">Cancel</a>
					</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection()

@section('scripts')


@endsection()