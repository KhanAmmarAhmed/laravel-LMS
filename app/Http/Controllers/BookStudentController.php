<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\book_student;
use App\Models\students;
use App\Models\books;


class BookStudentController extends Controller
{
    public function index()
    {
        $book_students = book_student::all();
        return view('book_student.book-student-index', compact('book_students'));
    }

    public function create()
    {
        $books = books::all();
        $students = students::all();
     
        return view('book_student.add-new-book-student', compact('books', 'students'));
    }




    public function storebook_student(Request $request)
    {
        $validatedData = $request->validate([
            'book_id' => 'required',
            'student_id' => 'required',
        ]);
    
        // Create a new ClientProject instance
        $book_student = new book_student;
    
        // Assign values from the form to the book_student instance
        $book_student->book_id = $request->input('book_id');
        $book_student->student_id = $request->input('student_id');
    
        // Save the ClientProject instance
        $book_student->save();
    
        return redirect()->back()->with('Success','book_student added successfully');
    }
    




    
    

    public function edit($allocated_id)
    {
        $book_student = book_student::findOrFail($allocated_id);
        // Retrieve additional data needed for the edit form, if necessary
        // Pass the data to the view for the form
        $books = books::all();
        $students = students::all();

        return view('book_student.edit-book-student', compact('book_student', 'books', 'students'));
    }




    public function updatebook_student(Request $request, $allocated_id)
    
{

    

     $book_student=book_student::where('allocated_id',$allocated_id)->first();
     $book_student->book_id = $request->book_id ;
     $book_student->student_id = $request->student_id ;
     $book_student->save();
    
    return redirect()->back()->with('success', 'book_student updated successfully');
}









public function deletebook_student($allocated_id){

    book_student::where('allocated_id','=',$allocated_id)->delete();
    return redirect()->back()->with('Success','book_student deleted successfully');


}


}
