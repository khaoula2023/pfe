@extends('layouts.admin_layout')
@section('content')

<div class="card">

        <div class="card-header">
            <h2 class="card-title">les Categories</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="add-new" href="{{ route('category.create') }}"> <i class="fa fa-plus"> Ajouter Categorie </i></a>
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table length">

    
                    
                        <thead>
                        <tr class="bg-primary" </tr>
                            <th>Numero</th>
                            <th> Nom de Categorie</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </thead>
                        <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->id }}</td>
                                    <td>{{ $category->name }}</td>
                                    <td class="edit">
                                        <a href="{{ route('category.edit', $category) }}" class="btn btn-success">Modifier</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('category.destroy', $category) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-author">Supprimer</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Category Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $categories->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection

