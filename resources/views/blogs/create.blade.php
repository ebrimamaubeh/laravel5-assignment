@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
          <div class="panel-heading main-color-bg">
            <h3 class="panel-title">New Blog</h3>
          </div>
          <div class="panel-body">

          <form class="form-horizontal" method="POST" 
                    enctype="multipart/form-data" action="{{ route('blogs.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-2 control-label">Title: </label>

                            <div class="col-md-8">
                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-2 control-label">Description: </label>

                            <div class="col-md-8">

                                <textarea name="description" rows="5" class="form-control" required>{{ old('description') }}</textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-2 control-label">Text: </label>

                            <div class="col-md-8">

                                <textarea name="text" rows="5" class="form-control"
                                 required>{{ old('text') }}</textarea>

                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="{{ $errors->has('image') ? ' has-error' : '' }}" style="margin-bottom: 60px;">
                          <label for="image" class="col-md-2">Image </label>
                            <label for="image" class="col-md-8 btn btn-primary">Browse File... </label>

                          <div class="col-md-6">
                                <input id="image" type="file" name="image" required style="display: none;">
                               
                                @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                          </div>
                          
                        </div>

                        <br>
                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Create Blog
                                </button>
                            </div>
                        </div>

                    </form>

            
          </div>
    </div>

@endsection









