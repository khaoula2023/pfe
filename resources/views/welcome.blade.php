@extends('layouts.guest')

@section('content')
    <nav class="navbar navbar-expand-md bg-warning navbar-warning  text-warning">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainmenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="mainmenu">
                <ul class="navbar-nav ms-auto">
                    <!-- add menu items here -->
                </ul>
            </div>
        </div>
    </nav>

    <section id="hero" class="bg-light text-black text-center text-sm-start py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <img class="img-fluid w-75 mx-auto" src="{{ asset('images/library.png') }}" alt="Library">
                </div>
                <div class="col-sm-6">
                    <h1 class="display-5 mb-4">مرحبا بكم بالمكتبة العمومية  بالرقبة</h1>
                    <p class="lead mb-4">Nous sommes heureux de vous accueillir dans notre bibliothèque.</p>
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <h2 class="mb-3">Connexion Administrateur</h2>
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

    <section id="about" class="bg-white text-black py-5">
        <div class="container">
            <h2 class="display-5 text-center mb-4">توقيت العمل بالمكتبة العمومية بالرقبة</h2>
            <p class="lead mb-4 text-center.</p>
            <div class="row">
                <div class="col-md-4">
                    <div class="card mb-4 mb-md-0">
                        <div class="card-body">
                            <h4 class="card-title mb-3">Horaires</h4>
                            <p class="card-text">Lundi - Dimanche: 8am - 6pm </p>
                        </div>
                    </div>


@endsection