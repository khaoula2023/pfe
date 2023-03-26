@extends('layouts.app')

@section('content')

    <div id="admin-content" class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="admin-heading mb-4">Tableau de bord</h2>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Liste des auteurs</h5>
                        <p class="card-text">{{ $authors }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Liste des éditeurs</h5>
                        <p class="card-text">{{ $publishers }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Liste des Catégories</h5>
                        <p class="card-text">{{ $categories }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Liste des Livres</h5>
                        <p class="card-text">{{ $books }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Enregistrer des Abonnés</h5>
                        <p class="card-text">{{ $students }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card text-center">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Livres empruntés</h5>
                        <p class="card-text">{{ $issued_books }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection