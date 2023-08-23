<?php

namespace App\Http\Controllers;
use App\Models\students;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //////

    public function index() {
        $students = students::get();
        //return $data;
        return view('student.student-index',compact('students'));

       }

    
    public function addstudent(){
        return view('student.add-new-student');
    }   

    public function savestudent(Request $request){
        //dd($request->all());


        $request->validate([
          
            'student_id' => 'required',
            'student_name' => 'required',
            'student_email' => 'required',
            
    
            
        ]);
    
        

       $student_id =$request->student_id;
        $student_name =$request->student_name;
        $student_email =$request->student_email;
        
       

        $students = new students();
        $students->student_id = $student_id;
        $students->student_name = $student_name;
        $students->student_email = $student_email;
        
       
        $students->save();
        return redirect()->back()->with('Success','Student added successfully');

        
    }

        
    


    public function editstudent($student_id){
        $students = students::where('student_id','=',$student_id)->first();
    
        return view('student.edit-student',compact('students'));

    }


    public function updatestudent(Request $request){

        
        $request->validate([
          
            'student_id' => 'required',
            'student_name' => 'required',
            'student_email' => 'required',
            
    
            
        ]);
    
        

       $student_id =$request->student_id;
        $student_name =$request->student_name;
        $student_email =$request->student_email;
        
       

        $students = new students();
        $students->student_id = $student_id;
        $students->student_name = $student_name;
        $students->student_email = $student_email;

        students::where('student_id','=',$student_id)->update([
            'student_id'=>$student_id,
            'student_name'=>$student_name,
            'student_email'=>$student_email,
            
            
            
        ]);

        return redirect()->back()->with('Success','student updated successfully');

    }


    public function deletestudent($student_id){

        students::where('student_id','=',$student_id)->delete();
        return redirect()->back()->with('Success','student deleted successfully');


    }


 

}
