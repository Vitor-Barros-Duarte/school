<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\CourseStoreFormRequest;
use App\Models\Course;
use App\Models\Discipline;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $course = Course::all();
        $discipline = Discipline::all();
        return view('school.course.index',compact('course', 'discipline'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $disciplines = Discipline::all();
        return view('school.course.create', compact('disciplines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseStoreFormRequest $request)
    {
        Course::create($request->validated());
        return redirect()->route('course.index')->with(['success'=> 'course cadastrado com sucesso']);
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
    public function edit(Course $course)
    {
        return view('school.course.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseStoreFormRequest $request, course $course)
    {
        $course->update($request->validated());
        return redirect()->route('course.index')->with(['success'=> 'course editado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('course.index')->with(['success'=> 'course deletado com sucesso']);
    }
}
