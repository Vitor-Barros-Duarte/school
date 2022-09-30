<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StudentStoreFormRequest;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = student::all();
        return view('admin.student.index', compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentStoreFormRequest $request)
    {
        Student::create($request->validated());
        return redirect()->route('student.index')->with(['success'=> 'student cadastrado com sucesso']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = DB::table('student')
                ->join('course','student.id_course','=','course.id_course')
                ->select('student.*', 'course.name as course_name')
                ->get();

        $data = json_decode($data, true);
        $size=count($data);

        for($i=0;$i<$size;$i++){

            $data[$i]["address"] ="ADDRESS: ". $data[$i]["address"]. ", DISTRICT: ". $data[$i]["neighborhood"].", CEP: ".$data[$i]["zip"]." , NUMBER: ".$data[$i]["number"].", CITY: ".$data[$i]["city"].", STATE: ".$data[$i]["state"];
            $data[$i]["phone"]." ".$data[$i][" email"];
        }
        return json_encode($data);

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(student $student)
    {
        return view('admin.student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentStoreFormRequest $request, student $student)
    {
        $student->update($request->validated());
        return redirect()->route('student.index')->with(['success'=> 'student editado com sucesso']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(student $student)
    {
        $student->delete();
        return redirect()->route('student.index')->with(['success'=> 'student deletado com sucesso']);
    }
}
