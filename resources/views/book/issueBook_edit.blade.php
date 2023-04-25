@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Livre Retourné</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('book_issue.update', $book->id) }}" method="post" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label> Nom Abonné</label>
                            <select class="form-control" name="student_id" required>
                                <option value="">Sélectionner Nom</option>
                                @foreach ($students as $student)
                                    <option value="{{ $student->id }}" {{ $book->student_id == $student->id ? 'selected' : '' }}>{{ $student->Name }}</option>
                                @endforeach
                            </select>
                            @error('student_id')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Titre</label>
                            <select class="form-control" name="book_id" required>
                                <option value="">Sélectionner Titre</option>
                                @foreach ($books as $book)
                                    <option value="{{ $book->id }}" {{ $book->book_id == $book->id ? 'selected' : '' }}>{{ $book->Titre }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Téléphone</label>
                            <input type="tel" class="form-control" placeholder="Téléphone" name="Phone" value="{{ $book->student->Phone }}" required>
                            @error('Phone')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" placeholder="Email" name="Email" value="{{ $book->student->Email }}" required>
                            @error('Email')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date de prêt</label>
                            <input type="date" class="form-control" placeholder="Date de prêt" name="issue_date" value="{{ $book->issue_date->format('Y-m-d') }}" required>
                            @error('issue_date')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date de retour</label>
                            <input type="date" class="form-control" placeholder="Date de retour" name="return_day" value="{{ $book->return_day->format('Y-m-d') }}" required>
                            @error('return_day')
                                <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Modifier" >
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

