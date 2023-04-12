@extends('layouts.admin_layout')
@section('content')

<div class="card">

        <div class="card-header">
            <h2 class="card-title">les  Editions</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="add-new" href="{{ route('publisher.create') }}"> <i class="fa fa-plus"> Ajouter Edition </i></a>
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table length">
                        
                        <thead>
                        <tr class="bg-primary"</tr>
                            <th>Numero</th>
                            <th> Nom d'Edition</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </thead>
                        <tbody>
                            @forelse ($publishers as $publisher)
                                <tr>
                                    <td>{{ $publisher->id }}</td>
                                    <td>{{ $publisher->name }}</td>
                                    <td class="edit">
                                        <a href="{{ route('publisher.edit', $publisher) }}" class="btn btn-success">Modifier</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('publisher.destroy', $publisher) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-author">Supprimer</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">no publisher found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $publishers->links('vendor/pagination/bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection

