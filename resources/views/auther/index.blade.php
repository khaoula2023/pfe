@extends('layouts.admin_layout')

@section('content')
    <div class="card">

        <div class="card-header">
            <h2 class="card-title">liste  des auteurs</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="add-new" href="{{ route('authors.create') }}"> <i class="fa fa-plus"> Ajouter auteur</i></a>
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table length">

                    
                    <thead>
                        <tr class="bg-primary" </tr>
                        <th>Numéro</th>
                        <th>Nom auteur</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                           
                    </thead>
                    <tbody>
                        @forelse ($authors as $auther)
                            <tr>
                                <td>{{ $auther->id }}</td>
                                <td>{{ $auther->name }}</td>
                                <td class="edit">
                                    <a href="{{ route('authors.edit', $auther) }}" class="btn btn-success">Modifier</a>
                                </td>
                                <td class="delete">
                                    <form action="{{ route('authors.destroy', $auther->id) }}" method="post"
                                        class="form-hidden">
                                    <button class="btn btn-danger delete-author">Supprimer</button>
                                    @csrf
                                    </form>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Authors Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $authors->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
