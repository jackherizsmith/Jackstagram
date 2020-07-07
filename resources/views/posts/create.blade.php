@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/p" enctype="multipart/form-data" method="post">
        {{ csrf_field() }}
        
        <div class="row">
            <div class="col-8 offset-2">
                <h1>Add new post</h1>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Post caption') }}</label>
                    <input  id="caption" 
                            type="text" 
                            class="form-control @error('caption') is-invalid @enderror" 
                            name="caption" 
                            value="{{ old('caption') }}" 
                            autocomplete="caption">
                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Post image') }}</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @error('image')
                        <strong style="color:#e3342f; font-size: 80%;">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary mt-4">Add new post</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
