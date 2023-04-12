@extends('layouts.admin_layout')
@section('content')

<div class="card">

        <div class="card-header">
            <h2 class="card-title">les Abonnés</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <a class="add-new" href="{{ route('student.create') }}"> <i class="fa fa-plus"> Ajouter Abonés </i></a>
                    </div>
                </div>
            </div>
            <table id="example1" class="table table-bordered table-striped table length">

                        <thead>
                        <tr class="bg-primary" </tr>
                            <th>Numero Abonné</th>
                            <th>Nom </th>
                            <th>Date de naissance </th>
                            <th>Genre</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Address</th>
                            <th>Fonction</th>
                            <th>Numero CIN</th>
                            <th>Modifier</th>
                            <th>Supprimer</th>
                        </thead>
                        <tbody>
                            @forelse ($students as $student)
                                <tr>
                                    
                                    <td>{{ $student->Numero_abonné }}</td>
                                    <td>{{ $student->Name }}</td>
                                    <td>{{ $student->Date_de_naissance}}</td>
                                    <td>{{ $student->Gender }}</td>
                                    <td>{{ $student->Email }}</td>
                                    <td>{{ $student->Phone }}</td>
                                    <td>{{ $student->Address }}</td>
                                    <td>{{ $student->Fonction }}</td>
                                    <td>{{ $student->Numero_CIN }}</td>


                                    
                                    <td class="edit">
                                        <a href="{{ route('student.edit', $student) }}>" class="btn btn-success">Modifier</a>
                                    </td>
                                    <td class="delete">
                                        <form action="{{ route('student.destroy', $student->id) }}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-student">Supprimer</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8">No Students Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{ $students->links('vendor/pagination/bootstrap-4') }}
                    <div id="modal">
                        <div id="modal-form">
                            <table cellpadding="10px" width="100%">

                            </table>
                            <div id="close-btn"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script type="text/javascript">
        //Show shudent detail
        $(".view-btn").on("click", function() {
            var student_id = $(this).data("sid");
            $.ajax({
                url: "http://127.0.0.1:8000/student/show/"+student_id,
                type: "get",
                success: function(student) {
                    console.log(student);
                    form ="<tr><td>Nom abonné :</td><td><b>"+student['name']+"</b></td></tr><tr><td>Addresse :</td><td><b>"+student['address']+"</b></td></tr><tr><td>Genre :</td><td><b>"+ student['gender']+ "</b></td></tr><tr><td>Fonction :</td><td><b>"+ student['class']+ "</b></td></tr><tr><td>Age :</td><td><b>"+ student['age']+ "</b></td></tr><tr><td>Telephone :</td><td><b>"+ student['phone']+ "</b></td></tr><tr><td>Email :</td><td><b>"+ student['email']+ "</b></td></tr>";
          console.log(form);

                    $("#modal-form table").html(form);
                    $("#modal").show();
                }
            });
        });

        //Hide modal box
        $('#close-btn').on("click", function() {
            $("#modal").hide();
        });

        //delete student script
        $(".delete-student").on("click", function() {
            var s_id = $(this).data("sid");
            $.ajax({
                url: "delete-student.php",
                type: "POST",
                data: {
                    sid: s_id
                },
                success: function(data) {
                    $(".message").html(data);
                    setTimeout(function() {
                        window.location.reload();
                    }, 2000);
                }
            });
        });
    </script>
@endsection
