@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">opération de prêt </h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('book_issued') }}">Liste de tous les prêts</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('book_issue.create') }}" method="post"
                        autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label> Nom Abonné</label>
                            <select class="form-control" name="student_id" required>
                                <option value="">Sélectionner Nom</option>
                                @foreach ($students as $student)
                                    <option value='{{ $student->id }}'>{{ $student->Name }}</option>
                                @endforeach
                            </select>
                            @error('student_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Titre</label>
                            <select class="form-control" name="book_id" required>
                                <option value="">Sélectionner Titre</option>
                                @foreach ($books as $book)
                                    <option value='{{ $book->id }}'>{{ $book->Titre }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="tel" class="form-control" placeholder="telephone" name="Phone"
                                value="{{ old('Phone') }}" required>
                            @error('Phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="Email"
                                value="{{ old('Email') }}" required>
                            @error('Email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="form-group">
                            <label>Date de prêt</label>
                            <input type="date" class="form-control" placeholder="issue_date" name="issue_date"
                                value="{{ old('issue_date') }}" required>
                            @error('issue_date')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date de retour</label>
                            <input type="date" class="form-control" placeholder="return_date" name="return_da"
                                value="{{ old('return_day') }}" required>
                            @error('return_date')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Enregistrer">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection