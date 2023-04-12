@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Ajouter Abonné</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="{{ route('students') }}">Tous les Abonnés</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('student.store') }}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label> Numero Abonné</label>
                            <input type="number" class="form-control" placeholder="Numero_abonné" name="Numero_abonné"
                                value="{{ old('Numero_abonné') }}" required>
                            @error('Numero_abonné')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label> Nom Abonné</label>
                            <input type="text" class="form-control" placeholder="Nom Abonné" name="Name"
                                value="{{ old('Name') }}" required>
                            @error('Name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" placeholder="Address" name="Address"
                                value="{{ old('Address') }}" required>
                            @error('Address')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Genre</label>
                            <select name="Gender" class="form-control">
                                <option value="male" selected>Homme</option>
                                <option value="female">Femme</option>
                            </select>
                            @error('Gender')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>fonction</label>
                            <input type="text" class="form-control" placeholder="Fonction" name="Fonction"
                                value="{{ old('Fonction') }}" required>
                            @error('Fonction')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date de naissance</label>
                            <input type="date" class="form-control" placeholder="Date de naissance" name="Date_de_naissance"
                                value="{{ old('Date_de_naissance') }}" required>
                            @error('Date_de_naissance')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Telephone</label>
                            <input type="number" class="form-control" placeholder="telephone" name="Phone"
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
                                  <label> Numero CIN</label>
                          <input type="number" class="form-control" placeholder="CIN" name="Numero_CIN" value="{{ old('Numero_CIN') }}" required>
                       @error('Numero_CIN')
                      <div class="alert alert-danger" role="alert">
                       {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="submit" name="enregistrer" class="btn btn-danger" value="enregistrer">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
