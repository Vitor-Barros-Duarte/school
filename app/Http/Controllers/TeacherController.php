<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeacherStoreFormRequest;
use App\Http\Resources\student;
use App\Models\Course;
use App\Models\Discipline;
use App\Models\Teacher;
use App\Models\Team;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teacher = teacher::all();
        return view('school.teacher.index', compact('teacher'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplines = discipline::all();
        return view('school.teacher.create', compact('disciplines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherStoreFormRequest $request)
    {
        Teacher::create($request->validated());
        return redirect()->route('teacher.index')->with(['success'=> 'teacher cadastrado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(teacher $teacher)
    {
        return view('school.teacher.edit', compact('teacher'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherStoreFormRequest $request, teacher $teacher)
    {
        $teacher->update($request->validated());
        return redirect()->route('teacher.index')->with(['success'=> 'teacher editado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(teacher $teacher)
    {
        $teacher->delete();
        return redirect()->route('teacher.index')->with(['success'=> 'teacher deletado com sucesso']);
    }
}
