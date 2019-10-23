<div class="col-12">
    <div class="card">
        <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="{{ $user->id }}">
            @method('put')
            @csrf
            <div class="card-header">