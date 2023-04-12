@extends('layouts.admin_layout')
@section('content')

<div class="card">

        <div class="card-header">
            <h2 class="card-title">Liste des Livres</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="add-new" href="{{ route('book.create') }}"> <i class="fa fa-plus"> Ajouter Livre </i></a>
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table length">

    
                        <thead>

                            <tr class="bg-primary"</tr>
                                <th>Numero </th>
                                <th>Numero Local</th>
                                <th>Numero Central</th>
                                <th>ISBN</th>
                                <th>Titre</th>
                                <th>Categorie</th>
                                <th>Auteur</th>
                                <th>Edition</th>
                                <th>Nombre de pages</th>
                                <th>Status</th>
                                <th>Modifier</th>
                                <th>Supprimer</th>
                                
                        </thead>
                        <tbody>
                            @forelse ($books as $book)
                                <tr>
                                    <td class="id">{{ $book->id }}</td>
                                    <td>{{ $book->Numero_local }}</td>
                                    <td>{{ $book->Numero_central }}</td>
                                    <td>{{ $book->ISBN }}</td>
                                    <td>{{ $book->Titre }}</td>
                                    <td>{{ $book->category->name }}</td>
                                    <td>{{ $book->auther->name }}</td>
                                    <td>{{ $book->publisher->name }}</td>
                                    <td>{{ $book->Nombre_de_page }}</td>
                                    <td>
                                        @if ($book->status == 'Y')
                                            <span class='badge badge-success'>Diponible</span>
                                        @else
                                            <span class='badge badge-danger'>Emprunté</span>
                                        @endif
                                    </td>
                                    <td class="edit">
                                        <a href="{{ route('book.edit', $book) }}" class="btn btn-success">Modifier</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('book.destroy', $book) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-book">Supprimer</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">LIvres introuvables </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $books->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>



    
@endsection
