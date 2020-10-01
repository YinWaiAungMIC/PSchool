<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Student;
use App\User;
use App\Grade;
use App\Parents;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $students = Student::with('class')->latest()->paginate(10);
       return view('backend.students.index',compact('students'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes = Grade::latest()->get();
        $parents = Parents::with('user')->latest()->get();
        
        return view('backend.students.create', compact('classes','parents'));
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
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users',
            'password'          => 'required|string|min:8',
            'parent_id'         => 'required|numeric',
            'class_id'          => 'required|numeric',
            'roll_number'       => 'required|numeric|unique:students',
            'gender'            => 'required|string',
            'phone'             => 'required|string|max:255',
            'dateofbirth'       => 'required|date',
            'current_address'   => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255'
        ]);

        $user = User::create([
            'name'              => $request->name,
            'email'             => $request->email,
            'password'          => Hash::make($request->password)
        ]);

        
       /* $profile = time().'.'.$request->profile_picture->extension();  
   
       $request->profile_picture->move(public_path('backendtemplate/studentImg'), $profile);*/
         // $myfile='backendtemplate/itemimg/'.$profile;

       $profile = time().'.'.$request->profile_picture->extension();  
       $request->profile_picture->move(public_path('images/profiles'), $profile);
       $profile='images/profiles/'.$profile;
       $user->update([
        'profile_picture' => $profile
    ]);

       $user->student()->create([
        'parent_id'         => $request->parent_id,
        'class_id'          => $request->class_id,
        'roll_number'       => $request->roll_number,
        'gender'            => $request->gender,
        'phone'             => $request->phone,
        'dateofbirth'       => $request->dateofbirth,
        'current_address'   => $request->current_address,
        'permanent_address' => $request->permanent_address
    ]);

       $user->assignRole('Student');

       return redirect()->route('student.index');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
       $class = Grade::with('subjects')->where('id', $student->class_id)->first();
       
       return view('backend.students.show', compact('class','student'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        $classes = Grade::latest()->get();
        $parents = Parents::with('user')->latest()->get();

        return view('backend.students.edit', compact('classes','parents','student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|string|email|max:255|unique:users,email,'.$student->user_id,
            'parent_id'         => 'required|numeric',
            'class_id'          => 'required|numeric',
            'roll_number'       => 'required|numeric|unique:students,roll_number,'.$student->id,
            'gender'            => 'required|string',
            'phone'             => 'required|string|max:255',
            'dateofbirth'       => 'required|date',
            'current_address'   => 'required|string|max:255',
            'permanent_address' => 'required|string|max:255'
        ]);

        if ($request->hasFile('profile_picture')) {
            $profile = time().'.'.$request->profile_picture->extension();  
            
            $request->profile_picture->move(public_path('backendtemplate/studentImg'), $profile);
        } else {
            $profile = $student->user->profile_picture;
        }

        $student->user()->update([
            'name'              => $request->name,
            'email'             => $request->email,
            'profile_picture'   => $profile
        ]);

        $student->update([
            'parent_id'         => $request->parent_id,
            'class_id'          => $request->class_id,
            'roll_number'       => $request->roll_number,
            'gender'            => $request->gender,
            'phone'             => $request->phone,
            'dateofbirth'       => $request->dateofbirth,
            'current_address'   => $request->current_address,
            'permanent_address' => $request->permanent_address
        ]);

        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $student=Student::find($id);
       //delete related  file from storage
     $student->delete();
     return redirect()->route('student.index');
 }
 
}
