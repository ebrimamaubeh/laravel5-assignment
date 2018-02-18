@extends('layouts.master')

@section('content')

@if(session('status'))
	<div class="alert alert-success">
		{{session('status')}}
	</div>
@endif

@if(session('fail'))
	<div class="alert alert-danger">
		{{session('fail')}}
	</div>
@endif



 <div class="panel panel-default">
  <div class="panel-heading main-color-bg">
    <h3 class="panel-title">Blogs</h3>
  </div>
  <div class="panel-body">

  <table class="table table-striped table-hover">
        <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Posted on</th>
        <th></th>
      

        @foreach($blogs as $blog)
         </tr>
          	<td>{{ str_limit($blog->title, 10) }}</td>
          	<td>{{ str_limit($blog->description, 20) }}</td>
          	<td>{{ $blog->created_at }}</td>
          	 <td>
          	 <a class="btn btn-default" href="{{ route('blogs.show', ['id' => $blog->id]) }}">Show</a> </td>
          </tr>
        @endforeach



  </table>

    {{$blogs->links()}}
    
  </div>
</div>


@endsection