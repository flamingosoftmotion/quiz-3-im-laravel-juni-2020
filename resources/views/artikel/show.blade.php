@extends('layouts.master')
@section('content')

	<div class="row">
        	<div class="col-sm-6">
    <div class="card card-primary card-outline">
      <div class="card-body">
        
        		<h3>{{$data->judul}} </h3>	
            	<h6>slug : {{$data->slug}} </h6>
            	<p> {{$data->isi}} </p>
            	@foreach($data->tags as $tag)
              <a href="" class="btn btn-info btn-sm">{{$tag}}</a>
              @endforeach
      		</div>
       	</div>
      <!-- /.col -->
     </div>
  <!-- ./row -->
  </div>
  <!-- /.card -->
    
@stop
@section('footer')

 
@stop