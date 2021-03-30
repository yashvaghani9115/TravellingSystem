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
					<h3>Add City</h3>
				</div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
				<div class="card-body">
					<div class="row">
						<div class="col-md-8"> 
							<form action="/storecity" method="post" enctype="multipart/form-data">
								@csrf
						        <div class="form-group">
				    		        <label>Name</label>
				    		        <input type="text" name="name" class="form-control"/>
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
				    		        <input type="textarea" name="description" class="form-control"/>
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