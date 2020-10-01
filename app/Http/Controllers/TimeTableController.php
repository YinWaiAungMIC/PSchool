<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Grade;
use App\Timetable;
use App\Teacher;
use App\Subject;

class TimeTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $timetables=Timetable::all();
        return view('backend.timetable.index',compact('timetables'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
     $teachers=Teacher::all();
     $classes=Grade::latest()->get();
     return view('backend.timetable.create', compact('teachers','classes'));
 }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            
            'class_id'         => 'required|numeric',
            'teacher_id'       => 'required|numeric',
            'day'              => 'required',
            'time'             => 'required',
            
        ]);

        
        
        Timetable::create([
            'class_id'        => $request->class_id,
            'teacher_id'     => $request->teacher_id,
            'day'        => $request->day,
            'time' => $request->time
        ]);
        

        return redirect()->route('timetable.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {  
        $times = Timetable::select('*')
        ->where('class_id', '=',$id)
        ->get();
        //$times=Timetable::find(class_id,$id)->get();
        $cname=Grade::find($id);
        return view('backend.timetable.show',compact('times','cname'));


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $teachers = Teacher::latest()->get();
     $classes = Grade::all();
     $timetable=Timetable::find($id);


     return view('backend.timetable.edit', compact('classes','teachers','timetable'));
 }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
           'class_id'         => 'required|numeric',
            'teacher_id'       => 'required|numeric',
            'day'              => 'required',
            'time'             => 'required',
        ]);

        $timetable = Timetable::find($id);

        $timetable->update([
            'class_id'        => $request->class_id,
            'teacher_id'     => $request->teacher_id,
            'day'        => $request->day,
            'time' => $request->time
        ]);

        return redirect()->route('timetable.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $timetable = Timetable::findOrFail($id);
        $timetable->delete();

        return back();
    }
}
