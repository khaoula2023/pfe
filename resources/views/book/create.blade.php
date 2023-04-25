@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Ajouter Livre</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('books') }}">Tous Les Livres</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('book.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Numéro Local</label>
                            <input type="tel" class="form-control @error('Numero_local') isinvalid @enderror"
                                placeholder="Numéro Local" name="Numero_local" value="{{ old('Numero_local') ?? $Numero_local }}" required>
                            @error('Numero_local')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="form-group">
                            <label>Numéro Central</label>
                            <input type="tel" class="form-control @error('Numero_central') isinvalid @enderror"
                                placeholder="Numéro Central" name="Numero_central" value="{{ old('Numero_central') ?? $Numero_central }}" required>
                            @error('Numero_central')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="tel" class="form-control @error('ISBN') isinvalid @enderror"
                                placeholder="ISBN" name="ISBN" value="{{ old('ISBN') ?? $ISBN}}" required>
                            @error('ISBN')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="form-group">
                            <label> Titre</label>
                            <input type="text" class="form-control @error('Titre') isinvalid @enderror"
                                placeholder=" Titre" name="Titre" value="{{ old('Titre') ?? $Titre }}" required>
                            @error('Titre')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Categorie</label>
                            <select class="form-control @error('category_id') isinvalid @enderror " name="category_id" required>
                                <option value="">Sélectionner Categorie</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Auteur</label>
                            <select class="form-control @error('auther_id') isinvalid @enderror " name="auther_id" required>
                                <option value="">Sélectionner Auteur</option>
                                @foreach ($authors as $author)
                                    <option value='{{ $author->id }}'>{{ $author->name }}</option>";
                                @endforeach
                            </select>
                            @error('auther_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Edition</label>
                            <select class="form-control @error('publisher_id') isinvalid @enderror " name="publisher_id" required>
                                <option value="">Sélectionner Edition</option>
                                @foreach ($publishers as $publisher)
                                    <option value='{{ $publisher->id }}'>{{ $publisher->name }}</option>";
                                @endforeach
                            </select>
                            @error('publisher_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="form-group">
                            <label>Nombre de pages</label>
                            <input type="tel" class="form-control @error('Nombre_de_page') is-invalid @enderror"
                                placeholder="Nombre de pages" name="Nombre_de_page" value="{{ old('Nombre_de_page') ?? $Nombre_de_page}}" required>
                            @error('Nombre_de_page')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Enregistrer" required>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
