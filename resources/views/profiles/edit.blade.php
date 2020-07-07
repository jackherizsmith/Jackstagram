@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
        <input type="hidden" name="_method" value="PATCH">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-8 offset-2">
                <h1>Edit profile</h1>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">{{ __('Profile title') }}</label>
                    <input  id="title" 
                            type="text" 
                            class="form-control @error('title') is-invalid @enderror" 
                            name="title" 
                            value="{{ old('title') ?? $user->profile-> title }}" 
                            autocomplete="title">
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">{{ __('Profile description') }}</label>
                    <input  id="description" 
                            type="text" 
                            class="form-control @error('description') is-invalid @enderror" 
                            name="description" 
                            value="{{ old('description') ?? $user->profile-> description }}" 
                            autocomplete="description">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">{{ __('Profile URL') }}</label>
                    <input  id="url" 
                            type="text" 
                            class="form-control @error('url') is-invalid @enderror" 
                            name="url" 
                            value="{{ old('url') ?? $user->profile-> url }}" 
                            autocomplete="url">
                    @error('url')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Profile image') }}</label>
                    <input type="file" name="image" id="image" class="form-control-file">
                    @error('image')
                        <strong style="color:#e3342f; font-size: 80%;">{{ $message }}</strong>
                    @enderror
                </div>
                <div class="row">
                    <button type="submit" class="btn btn-primary mt-4">Save profile</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
