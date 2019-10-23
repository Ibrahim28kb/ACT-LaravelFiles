@extends('backend.layout.master')

@section('pageTitle','Show user')

@section('content')

<div class="section-header">
    <h1>{{ $user->name.' Profile'}}</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card profile-widget"> 
                <div class="profile-widget-header">
                    
                    <img alt="image" src="{{ is_null($user->avatar)?url('assets/img/avatar/avatar-1.png'):url('storage/'.$user->avatar) }}"
                        class="rounded-circle profile-widget-picture">
                    <div class="profile-widget-items">
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Posts</div>
                            <div class="profile-widget-item-value">187</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Followers</div>
                            <div class="profile-widget-item-value">6,8K</div>
                        </div>
                        <div class="profile-widget-item">
                            <div class="profile-widget-item-label">Following</div>
                            <div class="profile-widget-item-value">2,1K</div>
                        </div>
                    </div>
                </div>
                <div class="profile-widget-description pb-0">
                    <div class="profile-widget-name">{{ $user->name }} <div
                            class="text-muted d-inline font-weight-normal">
                            <div class="slash"></div>
                            <div
                                class="badge badge-@switch($user->role) @case('admin')danger @break @case('author')info @break @case('user')light @break @endswitch">
                                {{ ucfirst($user->role) }}
                            </div>

                        </div>
                    </div>
                    <p>
                        @if(is_null($user->bio))
                        <i>no bio has beed added</i>
                        @else
                        {{ $user->bio }}
                        @endif
                    </p>

                    <p>
                        @if(is_null($user->mobile))
                        <i>no mobile number has beed added</i>
                        @else
                        <i class="fas fa-mobile-alt"></i>
                        {{ $user->mobile }}
                        @endif
                    </p>

                    <p>
                        @if(is_null($user->email))
                        <i>no email address has beed added</i>
                        @else
                        <i class="fas fa-envelope-open-text"></i>
                        {{ $user->email }}
                        @endif
                    </p>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="text-right ">
                <form action="{{ route('user.destroy',$user->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-primary">Edit</a>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection