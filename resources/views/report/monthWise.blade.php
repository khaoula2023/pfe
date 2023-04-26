@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h2 class="admin-heading text-center">Rapport des prêts de livres par mois</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-4 col-md-4">
                    <form class="yourform mb-5" action="{{ route('reports.month_wise_generate') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <input type="month" name="month" class="form-control" value="{{ date('Y-m') }}">
                        </div>
                        <input type="submit" class="btn btn-danger" name="search_month" value="Recherche">
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
                            <tr class="bg-primary" </tr>
                                <th>Numero</th>
                                <th>Nom Abonné</th>
                                <th>Titre</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Date de prêt</th>
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
                                        <td colspan="10">Aucun résultat trouvé!</td>
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
