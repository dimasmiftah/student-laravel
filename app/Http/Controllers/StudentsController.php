<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // retrieve all data using eloquent
        $students = Student::all();
        // navigate  to view/students/index.blade.php with 'students' props
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // navigate to view/students/create.blade.php
        return view('students.create'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // way 1
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nim = $request->nim;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;
        // $student->save();

        // way 2
        // Student::create([
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'email' => $request->email,
        //     'jurusan' => $request->jurusan
        // ]); 

        // validation
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required'
            ]);
            
        // awesome way - using eloquent to store all $fillable properties declared in Student model 
        Student::create($request->all());
        // redirect to '/students' route with status message that will stored in session (global variable)
        return redirect('/students')->with('status', 'Student added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // navigate to view/students/edit.blade.php with 'student' props
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        // navigate to view/students/edit.blade.php with 'student' props
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        // validation
        $request->validate([
            'nama' => 'required',
            'nim' => 'required|size:8',
            'email' => 'required',
            'jurusan' => 'required'
            ]);
            
        // update data based on student id using eloquent
        Student::where('id', $student->id)
                ->update([
                    'nama' => $request->nama,
                    'nim' => $request->nim,
                    'email' => $request->email,
                    'jurusan' => $request->jurusan,
                ]);
        // redirect to '/students' route with status message that will stored in session (global variable)
        return redirect('/students')->with('status','Student detail updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        // using eloquent to destroy student based on student id. it used softdeletes as declared in Student model
        Student::destroy($student->id);
        // redirect to '/students' route with status message that will sored in session (global variable)
        return redirect('/students')->with('status', 'Student deleted!');
    }
}
