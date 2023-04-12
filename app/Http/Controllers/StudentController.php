<?php

namespace App\Http\Controllers;

use App\Models\student;
use App\Http\Requests\StorestudentRequest;
use App\Http\Requests\UpdatestudentRequest;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('student.index', [


            'students' => student::Paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create',[

            'Numero_abonné' => '',
            'Name' => '',
            'Date_de_naissance' => '',
            'Gender' => '',
            'Email' => '',
            'Phone' => '',
            'Address' => '',
            'Fonction' => '',
            'Numero_CIN' => '',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorestudentRequest $request)
    {
        student::create($request->validated());

        return redirect()->route('students');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = student::find($id)->first();
        return $student;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('student.edit', [
            'Numero_abonné' => $student->Numero_abonné,
            'Name' => $student->Name,
            'Date_de_naissance' => $student->Date_de_naissance,
            'Gender' => $student->Gender,
            'Email' => $student->Email,
            'Phone' => $student->Phone,
            'Address' => $student->Address,
            'Fonction' => $student->Fonction,
            'Numero_CIN' => $student->Numero_CIN,
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatestudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatestudentRequest $request, $id)
    {
        $student = student::find($id);
        $student->Numero_abonné = $request->Numero_abonné;
        $student->Name = $request->Name;
        $student->Date_de_naissance = $request->Date_de_naissance;
        $student->Gender = $request->Gender;
        $student->Email = $request->Email;
        $student->Phone = $request->Phone;
        $student->Address = $request->Address;
        $student->Fonction = $request->Fonction;
        $student->Numero_CIN = $request->Numero_CIN;
        $student->save();

    return redirect()->route('students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        student::find($id)->delete();
        return redirect()->route('students');
    }
}
