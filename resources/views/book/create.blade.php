@extends('layouts.admin_layout')@section('content')
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
                            <input type="text" class="form-control @error('local_number') isinvalid @enderror"
                                placeholder="Numéro Local" name="local_number" value="{{ old('local_number') }}" required>
                            @error('local_number')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="form-group">
                            <label>Numéro Central</label>
                            <input type="text" class="form-control @error('central_number') isinvalid @enderror"
                                placeholder="Numéro Central" name="central_number" value="{{ old('central_number') }}" required>
                            @error('central_number')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="text" class="form-control @error('isbn') isinvalid @enderror"
                                placeholder="ISBN" name="isbn" value="{{ old('isbn') }}" required>
                            @error('isbn')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        <div class="form-group">
                            <label> Titre</label>
                            <input type="text" class="form-control @error('name') isinvalid @enderror"
                                placeholder=" Titre" name="name" value="{{ old('name') }}" required>
                            @error('name')
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
                            <input type="number" class="form-control @error('pages') is-invalid @enderror"
                                placeholder="Nombre de pages" name="pages" value="{{ old('pages') }}" required>
                            @error('pages')
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
