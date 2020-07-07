@extends('layouts.app')

@section('content')
<div class="container">
   <div class="row">
       <div class="col-3 p-5">
        <img src="{{ $user -> profile -> profileImage()}}" alt="profile photo" class="rounded-circle border w-100">
       </div>
       <div class="col-9">
            <div class="pt-5 d-flex justify-content-between align-items-baseline">
                <div class="d-flex">
                    <h1>{{$user->username}}</h1>
                    <follow-button user-id="{{$user->id}}" follows="{{$follows}}"></follow-button>
                </div>
                @can('update',$user->profile)
                    <a href="/p/create">Add new post</a>
                @endcan
            </div>
            @can('update',$user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
            <div class="d-flex">
                <div class="pr-4"><strong>{{$postCount}}</strong> posts</div>
                <div class="pr-4"><strong>{{$followerCount}}</strong> followers</div>
                <div class="pr-4"><strong>{{$followingCount}}</strong> following</div>
            </div>
            <div class="pt-4 font-weight-bold">{{$user->profile->title}}</div>
            <div class="">{{$user->profile->description}}</div>
            <div class=""><a href="#">{{$user->profile->url}}</a></div>
       </div>
   </div>
   <div class="row pt-4">
   @foreach($user->posts as $post)
        <div class="col-4 pb-4">
        <a href="/p/{{$post->id}}">
                <img src="/storage/{{$post->image}}" alt="wip" class="w-100 pt-2">
            </a>
        </div>
    @endforeach
   </div>
</div>
@endsection
