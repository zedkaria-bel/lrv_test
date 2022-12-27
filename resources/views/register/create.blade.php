@extends('layout')

@section('title')
    Register
@endsection


@section('content')
    <div class="content d-flex flex-column justify-content-center align-items-center">
        <div class="register col-6 my-5 rounded p-4 d-flex flex-column justify-content-center align-items-center">
            <p class="fs-1 fw-bolder mb-3">
                Register now!
            </p>
            <form method="POST" action="/register" class="d-flex flex-column col-8">
                @csrf
                <div class="form-group mb-3">
                    <label for="name" class="col-form-label"><b>Nom et prénom</b></label>
                    <input type="text" class="form-control" name="name" id="name" value="" placeholder="Nom et prénom" required>
                    @error('name')
                        <p class="h6 mb-0 small" style="color: red"> {{$message}} </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="email" class="col-form-label"><b>E-mail</b></label>
                    <input type="email" class="form-control" name="email" id="email" value="" placeholder="Email" required>
                    @error('email')
                        <p class="h6 mb-0 small" style="color: red"> {{$message}} </p>
                    @enderror
                </div>
                <div class="form-group mb-3">
                    <label for="password" class="col-form-label"><b>Mot de passe</b></label>
                    <input type="password" class="form-control" name="password" id="password" value="" placeholder="Mot de passe" required>
                </div>
                <div class="d-flex align-self-center my-4">
                    <button class="btn btn-primary fs-5" type="submit">Confirmer</button>
                </div>
            </form>
        </div>
    </div>
@endsection
