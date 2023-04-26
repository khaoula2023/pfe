@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <h2 class="admin-heading text-center">Livres non rendus</h2>
                </div>
            </div>
            @if ($books)
            <div class="card">

<div class="card-header">
    
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
                                <th>Nom Abonés</th>
                                <th>Titre</th>
                                <th>Telephone</th>
                                <th>Email</th>
                                <th>Date d'emprunt</th>
                                <th> Date de Retour</th>
                                <th>Date de retard</th>
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
                                        <td>{{ $book->return_day->format('d M, Y') }}</td>
                                        <td>@php $date1 = date_create(date('Y-m-d'));
                                            $date2 = date_create($book->return_day->format('d-m-Y'));
                                            if($date1 > $date2){
                                              $diff = date_diff($date1,$date2);
                                              echo $days = $diff->format('%a jours');
                                            }else{
                                              echo '0 jours';
                                            } @endphp</td>
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
