@extends('layouts.master')

@section('title', 'Profil')

@section('content')
<div class="container mt-5">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="profile-form">
        <h2 class="text-center mb-4">Votre Profil</h2>
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
            @csrf
            @method('PUT')

            <div class="form-group row">
                <label for="name" class="col-sm-2 col-form-label">Nom</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" name="email" class="form-control" id="email" value="{{ Auth::user()->email }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="phone" class="col-sm-2 col-form-label">Téléphone</label>
                <div class="col-sm-10">
                    <input type="text" name="phone" class="form-control" id="phone" value="{{ Auth::user()->phone }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="country" class="col-sm-2 col-form-label">Pays</label>
                <div class="col-sm-10">
                    <input type="text" name="country" class="form-control" id="country" value="{{ Auth::user()->country }}">
                </div>
            </div>

            <div class="form-group row">
                <label for="photo" class="col-sm-2 col-form-label">Photo de profil</label>
                <div class="col-sm-10">
                    <input type="file" name="photo" class="form-control" id="photo">
                    @if(Auth::user()->photo)
                        <img src="{{ Storage::url(Auth::user()->photo) }}" alt="User Photo" class="img-thumbnail mt-2" width="150">
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-10 offset-sm-2">
                    <button type="submit" class="btn btn-primary">Mettre à jour le profil</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
