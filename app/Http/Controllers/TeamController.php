<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TeamStoreFormRequest;
use App\Models\Course;
use App\Models\Discipline;
use App\Models\Student;
use App\Models\Teacher;
use App\Models\Team;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = team::all();
        $courses = Course::all();
        $disciplines = Discipline::all();
        $students = Student::all();
        $teachers = teacher::all();
        return view('school.team.index', compact('teams','courses', 'disciplines', 'teachers', 'students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Course::all();
        $disciplines = Discipline::all();
        $students = Student::all();
        $teachers = teacher::all();
        return view('school.team.create', compact('courses', 'disciplines', 'teachers', 'students'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeamStoreFormRequest $request)
    {
        team::create($request->all());
        return redirect()->route('team.index')->with(['success'=> 'turma cadastrado com sucesso']);
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
    public function edit(team $team)
    {
        return view('school.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeamStoreFormRequest $request, team $team)
    {
        $team->update($request->validated());
        return redirect()->route('team.index')->with(['success'=> 'team editado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(team $team)
    {
        $team->delete();
        return redirect()->route('team.index')->with(['success'=> 'team deletado com sucesso']);
    }
}
