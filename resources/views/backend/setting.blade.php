@extends('backend.layout.master')

@section('pageTitle','Settings')

@section('content')

    <div class="section-header">
        <h1>Settings</h1>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                    
                <div class="card">
                    <form action="{{ route('setting.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label>Site Name</label>
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
                                <label>Description </label>
                                <textarea name="description" cols="30" rows="10" class="form-control">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Key words : </label>
                                <textarea name="key_words" cols="30" rows="10" class="form-control">{{ old('key_words') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Icon </label>
                                <input type="file" name="icon" class="form-control">
                            </div>
                            <div class="form-group ">
                                <label class="c">status</label>
                                <select class="form-control selectric" name="status">
                                    <option>Active</option>
                                    <option>Inactive</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Message maintenance : </label>
                                <textarea name="message_maintenance" cols="30" rows="10" class="form-control">{{ old('message_maintenance') }}</textarea>
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
     
