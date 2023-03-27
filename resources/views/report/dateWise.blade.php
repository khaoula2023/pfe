@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h2 class="admin-heading text-center">Rapport des prêts de livres par date</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <form class="yourform mb-5" action="{{ route('reports.date_wise_generate') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="date" name="date" class="form-control" value="{{ date('Y-m-d') }}">
                            @error('date')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-danger" name="search_date" value="Recherche">
                    </form>
                </div>
            </div>
            @if ($books)
                <div class="row">
                    <div class="col-md-12">
                        <table class="content-table">
                            <thead>
                                <th>Numero</th>
                                <th> Nom Aboné</th>
                                <th>Titre</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Date de prêt</th>
                            </thead>
                            <tbody>
                                @forelse ($books as $book)
                                    <tr>
                                        <td>{{ $book->id }}</td>
                                        <td>{{ $book->student->name }}</td>
                                        <td>{{ $book->book->name }}</td>
                                        <td>{{ $book->student->phone }}</td>
                                        <td>{{ $book->student->email }}</td>
                                        <td>{{ $book->issue_date->format('d M, Y') }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="10">Aucun enregistrement trouvé!</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
        @endif
    </div>
    </div>
@endsection
