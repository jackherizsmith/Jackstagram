@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}}" alt="post image" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="{{$post->user->profile->profileImage()}}" alt="profile" class="w-100 rounded-circle" style="max-width:50px;">
                </div>
                <div class="">
                    <div>
                        <strong>
                            <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                            <a href="#" class="pl-3">Follow</a>
                        </strong>
                    </div>
                </div>
            </div>
            <hr>
                <p>
                    <span>  
                        <strong>
                            <a href="/profile/{{$post->user->id}}" class="text-dark">{{$post->user->username}}</a>
                        </strong>
                    </span> 
                    {{$post->caption}}
                </p>
        </div>
    </div>
</div>
@endsection
