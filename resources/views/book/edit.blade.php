@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Modifier Livre</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('book.update', $book->id) }}" method="post"
                        autocomplete="off">
                        @csrf

                        <div class="form-group">
                            <label>Numero Local</label>
                            <input type="tel" class="form-control @error('Numero_local') isinvalid @enderror"
                                placeholder="Numero Local" name="Numero_local" value="{{ $book->Numero_local }}" >
                            @error('Numero_local')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label>Numero Central</label>
                            <input type="tel" class="form-control @error('Numero_central') isinvalid @enderror"
                                placeholder="Numero Ccentral" name="Numero_central" value="{{ $book->Numero_central }}" >
                            @error('Numero_central')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>ISBN</label>
                            <input type="tel" class="form-control @error('ISBN') isinvalid @enderror"
                                placeholder="ISBN" name="ISBN" value="{{ $book->ISBN}}" >
                            @error('ISBN')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Titre</label>
                            <input type="text" class="form-control @error('Titre') isinvalid @enderror"
                                placeholder="Titre" name="Titre" value="{{ $book->Titre }}" >
                            @error('Titre')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        
                        <div class="form-group">
                            <label>Categorie</label>
                            <select class="form-control @error('category_id') isinvalid @enderror " name="category_id"
                                >
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    @if ($category->id == $book->category_id)
                                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                    @else
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endif
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
                            <select class="form-control @error('auther_id') isinvalid @enderror " name="author_id">
                                <option value="">Select Author</option>
                                @foreach ($authors as $auther)
                                    @if ($auther->id == $book->auther_id)
                                        <option value="{{ $auther->id }}" selected>{{ $auther->name }}</option>
                                    @else
                                        <option value="{{ $auther->id }}">{{ $auther->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('auther_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Editeur</label>
                            <select class="form-control @error('publisher_id') isinvalid @enderror "
                                name="publisher_id" >
                                <option value="">Select Publisher</option>
                                @foreach ($publishers as $publisher)
                                    @if ($publisher->id == $book->publisher_id)
                                        <option value="{{ $publisher->id }}" selected>{{ $publisher->name }}</option>
                                    @else
                                        <option value="{{ $publisher->id }}">{{ $publisher->name }}</option>
                                    @endif
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
                            <input type="tel" class="form-control @error('Nombre_de_page') isinvalid @enderror"
                                placeholder="Nombre_de_page" name="Nombre_de_page" value="{{ $book->Nombre_de_page }}" >
                            @error('Nombre_de_page')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Modifier" >
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
