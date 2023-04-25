@extends('layouts.admin_layout')
@section('content')

<div class="card">

        <div class="card-header">
            <h2 class="card-title">livres empruntés</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="add-new" href="{{ route('book_issue.create') }}"> <i class="fa fa-plus"> Ajouter un prêt de livre </i></a>
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table length">

                        <thead>
                        <tr class="bg-primary" </tr>
                            <th>Numero</th>
                            <th> Nom abonné</th>
                            <th>Titre</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Date de prêt</th>
                            <th>Date de retour</th>
                            <th>Status</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </thead>
                        <tbody>
                            @forelse ($books as $book)
                                <tr style='@if (date('Y-m-d') > $book->return_day->format('d-m-Y') && $book->issue_status == 'N') ) background:rgba(255,0,0,0.2) @endif'>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->student->name }}</td>
                                    <td>{{ $book->book->name }}</td>
                                    <td>{{ $book->student->Phone }}</td>
                                    <td>{{ $book->student->Email }}</td>
                                    <td>{{ $book->issue_date->format('d M, Y') }}</td>
                                    <td>{{ $book->return_day->format('d M, Y') }}</td>
                                    <td>
                                        @if ($book->issue_status == 'Y')
                                            <span class='badge badge-success'>Retourné</span>
                                        @else
                                            <span class='badge badge-danger'>Issued</span>
                                        @endif
                                    </td>
                                    <td class="edit">
                                        <a href="{{ route('book_issue.edit', $book->id) }}" class="btn btn-success">Modifier</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('book_issue.destroy', $book) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger">Supprimer</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="10">Aucun livre emprunté</td>
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
