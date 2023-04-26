@extends('layouts.guest')

@section('content')
    <div class="d-flex justify-content-center">
        <div class="row">

        <section id="hero" class="bg-light text-black text-center text-sm-start py-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-6">
                        <img class="img-fluid w-75 mx-auto" src="{{ asset('images/library.png') }}" alt="Library">
                    </div>
                    <div class="col-sm-6">
                        <h1 class="display-5 mb-4" style="color: blue;"> المكتبة العمومية  بالرقبة</h1>

                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <h2 class="mb-3"> Admin</h2>
                            <div class="mb-3">
                                <label for="username" class="form-label">Nom d'utilisateur</label>
                                <input type="text" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}" required autofocus>
                                @error('username')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-danger">Connexion</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>
@endsection
