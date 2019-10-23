@extends('backend.layout.master')

@section('pageTitle','Add new user')

@section('content')

<div class="section-header">
    <h1>Add a new user</h1>
</div>

<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                        <h4>New user details</h4>
                    </div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>User full name</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </div>
                                </div>
                                <input type="text" name="name" class="form-control" value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Email address </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-at"></i>
                                    </div>
                                </div>
                                <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Password </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-key"></i>
                                    </div>
                                </div>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Mobile number </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fas fa-mobile-alt"></i>
                                    </div>
                                </div>
                                <input type="text" name="mobile" class="form-control" value="{{ old('mobile') }}"
                                    required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>BIO </label>
                            <textarea name="bio" cols="30" rows="10" class="form-control">{{ old('bio') }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Avatar </label>
                            <input type="file" name="avatar_image" class="form-control">
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-lg btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection