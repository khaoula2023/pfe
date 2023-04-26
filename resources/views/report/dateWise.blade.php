@extends('layouts.admin_layout')

@section('content')


    <div id="admin-content" class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="admin-heading text-center">Rapport des prêts de livres par date</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <form class="yourform mb-5" action="{{ route('reports.date_wise_generate') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="date">Sélectionnez une date :</label>
                        <input type="date" name="date" id="date" class="form-control" value="{{ date('Y-m-d') }}">
                        @error('date')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-danger">Recherche</button>
                </form>
            </div>
        </div>
        @if ($books)

        <div class="card">

        <div class="card-header">
            <h2 class="card-title">Liste des prêts</h2>
            
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table length">

                        <thead class="thead-dark">
                            <tr>
                                <th>Numero</th>
                                <th>Nom Abonné</th>
                                <th>Titre</th>
                                <th>Téléphone</th>
                                <th>Email</th>
                                <th>Date de prêt</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->student->Name }}</td>
                                    <td>{{ $book->book->Titre }}</td>
                                    <td>{{ $book->student->Phone }}</td>
                                    <td>{{ $book->student->Email }}</td>
                                    <td>{{ $book->issue_date->format('d M, Y') }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6">Aucun enregistrement trouvé !</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        @endif
    </div>
@endsection
