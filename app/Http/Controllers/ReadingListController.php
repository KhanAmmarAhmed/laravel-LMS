<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reading_list;
use App\Models\students;
use App\Models\books;

class ReadingListController extends Controller
{
    public function index()
    {
        $reading_lists = reading_list::all();
        return view('reading_list.reading-list-index', compact('reading_lists'));
    }

    public function create()
    {
        $books = books::all();
        $students = students::all();
     
        return view('reading_list.add-new-reading-list', compact('books', 'students'));
    }  




    public function storereading_list(Request $request)
    {
        $validatedData = $request->validate([
            'book_id' => 'required',
            'student_id' => 'required',
        ]);
    
        // Create a new ClientProject instance
        $reading_list = new reading_list;
    
        // Assign values from the form to the book_student instance
        $reading_list->book_id = $request->input('book_id');
        $reading_list->student_id = $request->input('student_id');
    
        // Save the ClientProject instance
        $reading_list->save();
    
        return redirect()->back()->with('Success','reading_list added successfully');
    }
    




    
    

    public function edit($bookmark_id)
    {
        $reading_list = reading_list::findOrFail($bookmark_id);
        // Retrieve additional data needed for the edit form, if necessary
        // Pass the data to the view for the form
        $books = books::all();
        $students = students::all();

        return view('reading_list.edit-reading-list', compact('reading_list', 'books', 'students'));
    }




    public function updatereading_list(Request $request, $bookmark_id)
    
{

     $reading_list=reading_list::where('bookmark_id',$bookmark_id)->first();
     $reading_list->book_id = $request->book_id ;
     $reading_list->student_id = $request->student_id ;
     $reading_list->save();
    
    return redirect()->back()->with('success', 'reading_list updated successfully');
}









public function deletereading_list($bookmark_id){

    reading_list::where('bookmark_id','=',$bookmark_id)->delete();
    return redirect()->back()->with('Success','reading_list deleted successfully');


}


}

