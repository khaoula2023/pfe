@extends('layouts.admin_layout')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Modifier Abonné</h2>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="{{ route('student.update', $student->id) }}" method="post"
                        autocomplete="off">
                        @csrf

                        <div class="form-group">
                            <label> Numero Abonné</label>
                            <input type="tel" class="form-control @error('Numero_abonné ') isinvalid @enderror" 
                            placeholder="Numero Abonné" name="Numero_abonné"
                                value="{{ $student->Numero_abonné }}" >
                            @error('Numero_abonné')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label> Nom Abonné</label>
                            <input type="text" class="form-control @error('Name') isinvalid @enderror" placeholder="Nom" name="Name"
                                value="{{ $student->Name }}" >
                            @error('Name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label> Date de maissance</label>
                            <input type="date" class="form-control @error('Date_de_naissance') isinvalid @enderror" placeholder="Date de naissance" name="Date_de_naissance"
                                value="{{ $student->Date_de_naissance }}" >
                            @error('Date_de_naissance')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Genre</label>
                            <select name="Gender" class="form-control @error('Gender') isinvalid @enderror">
                                @if ($student->Gender == 'male')
                                    <option value="male" selected>Homme</option>
                                @else
                                    <option value="female" selected>Femme</option>
                                @endif
                            </select>
                            @error('Gender')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label> Email</label>
                            <input type="Email" class="form-control @error('Email') isinvalid @enderror" placeholder="Email" name="Email"
                                value="{{ $student->Email}}" >
                            @error('Email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label> Telephone</label>
                            <input type="tel" class="form-control @error('Phone') isinvalid @enderror" placeholder="Telephone" name="Phone"
                                value="{{ $student->Phone}}" >
                            @error('Phone')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>Addresse</label>
                            <input type="text" class="form-control @error('Adress') isinvalid @enderror" placeholder="Address" name="Address"
                                value="{{ $student->Address }}" >
                            @error('Address')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>fonction</label>
                            <input type="text" class="form-control @error('Fonction') isinvalid @enderror" placeholder="Fonction" name="Fonction"
                                value="{{ $student->Fonction }}" required>
                            @error('Fonction')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label>Numero CIN</label>
                            <input type="tel" class="form-control @error('Numero_CIN') isinvalid @enderror" placeholder="Numero CIN" name="Numero_CIN"
                                value="{{ $student->Numero_CIN }}" required>
                            @error('Numero_CIN')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <input type="submit" name="save" class="btn btn-danger" value="Modifier">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection