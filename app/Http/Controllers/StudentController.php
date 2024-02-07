<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;
use Auth;

class StudentController extends Controller
{
    public function create_student()
    {
      return view('student.create_student'); 
    }
    public function store_student(Request $request){
        $data_insert = student::create([
            'name' =>$request->name,
            'roll' =>$request->roll,
            'age' =>$request->age,
            'gender' =>$request->gender,
            'phone' =>$request->phone,
            'district' =>$request->district,
            'created_by' =>Auth::user()->id,
        ]);
        return redirect()->route('create.student');
    }
    public function student_list(){
        $students = student::all();
        return view('student.student_list',compact('students'));
    }
    public function student_edit($id){
        $student = student::find($id);
        return view('student.student_edit', compact('student','id'));
    }
    public function student_update(Request $request, $id){
        $data = student::find($id);
        $data->name = $request->name;
        $data->roll = $request->roll;
        $data->age= $request->age;
        $data->gender = $request->gender;
        $data->phone= $request->phone;
        $data->district= $request->district;
        $data->updated_by= Auth::user()->id;
        $data->save();
        return redirect()->route('student.edit',$id);
    }
    public function student_delete($id){
        $data = student::find($id);
        $data->delete();
        return redirect()->route('student.list');
    }

}
