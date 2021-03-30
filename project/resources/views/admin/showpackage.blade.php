@extends('layouts.master')

@section('title')
			Travello
@endsection()



@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">Table List</h4>
                  <!-- for show the message updadated copy from home.blade.phpfile-->
                 @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                  @endif
              </div>
              <div class="card-body">
                <div class="table-responsive">
                    <h5 class="card-title">Package: <a href="/addpackageform" style="margin-left:800px" class="btn btn-success">ADD</a></h5>
                  <table class="table">
                    <thead class=" text-primary">
                      <!-- fetch table data -->
                      <th>Id</th>
                      <th>Name</th>
                      <th>Price</th>
                      <th>Nights</th>
                      <th>Inclusions</th>
                      <th>Description</th>
                      <th>City Id</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </thead>
                    <tbody>
                      <!--fetch table data -->
                      @foreach($package as $row)
                      <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>₹{{ $row->price }}</td>
                        <td>{{ $row->nights }} Nights</td>
                        <td>{{ $row->inclusions }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->city_id }}</td>
                        <td>
                          <a href="/editpackage/{{ $row->id }}" class="btn btn-success">EDIT</a>
                        </td>
                        <td>
                          <!-- we have to add form method because without form method it will show error-->
                          <form action="/deletepackage/{{ $row->id }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class="btn btn-danger">DELETE</button> 
                          </form>
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