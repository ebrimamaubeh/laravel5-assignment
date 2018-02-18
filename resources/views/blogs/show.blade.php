@extends('layouts.master')


@section('content')

 <div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">{{$blog->title}}</h3>
  </div>
  <div class="panel-body">

	<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Description</h3>
		  </div>
		  <div class="panel-body">
		  	<blockquote>{{$blog->description}}</blockquote>
		  </div>
	</div>

	<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Text</h3>
		  </div>
		  <div class="panel-body">
		  	<blockquote>
		  		{{$blog->text}}
		  	</blockquote>
		  </div>
	</div>

	<div class="panel panel-default">
		  <div class="panel-heading">
		    <h3 class="panel-title">Image</h3>
		  </div>
		  <div class="panel-body">

		  <img class=" img-responsive img-thumbnail img-circle" 
		  		src="{{ asset('images/'.$blog->image_name) }}">
		  	<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
		  		
		  	</div>
		  </div>
	</div>


  </div>
</div>

@endsection 