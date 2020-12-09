@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row pt-5">
        <div class="col-6 pt-5">
            <img src="/storage/{{ $post->image }}" class="w-100">
        </div>
        <div class="col-4 pt-5">
            <div>
                <div class="d-flex align-items-center">
                <div class="pr-3">
                    <img src="/storage/{{ $post->user->profile->profileImage() }}" style="max-width: 40px;" 
                         class ="rounded-circle w-100">
               </div>
                   <div class="font-weight-bold">
                       <a href="/profile/{{ $post->user->id }}">
                        <span class="text-dark">{{ $post->user->username }} </span>
                       </a>
                       <a href="#" class="pl-3">Follow</a>
                    </div>
               </div>
            </div>

            <hr/>

            <p>
                <span class="font-weight-bold">
                    <a href="/profile/{{ $post->user->id  }}">
                        <span class="text-dark">{{ $post->user->username }}</span>
                    </a>
                </span> {{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection
