@extends('layouts.master')

@section('content')
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" value="{{ Auth::user()->phone }}">
        </div>

        <div class="form-group">
            <label for="country">Country</label>
            <input type="text" name="country" class="form-control" id="country" value="{{ Auth::user()->country }}">
        </div>

        <div class="form-group">
            <label for="photo">Profile Photo</label>
            <input type="file" name="photo" class="form-control" id="photo">
            @if(Auth::user()->photo)
                <img src="{{ Storage::url(Auth::user()->photo) }}" alt="User Photo" class="img-thumbnail mt-2" width="150">
            @endif
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update Profile</button>
        </div>
    </form>
</div>
@endsection
