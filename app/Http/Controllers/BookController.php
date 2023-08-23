<?php

namespace App\Http\Controllers;
use App\Models\books;

use Illuminate\Http\Request;

class BookController extends Controller
{
    //////

    public function index() {
        $books = books::get();
        //return $data;
        return view('book.book-index',compact('books'));

       }

    
    public function addbook(){
        return view('book.add-new-book');
    }   

    public function savebook(Request $request){
        //dd($request->all());


        $request->validate([
          
            'book_id' => 'required',
            'title' => 'required',
            'Author_Name' => 'required',
            'admin_id' => 'required',
            
    
            
        ]);
    
        

       $book_id =$request->book_id;
        $title =$request->title;
        $Author_Name =$request->Author_Name;
        $admin_id =$request->admin_id;
        
       

        $books = new books();
        $books->book_id = $book_id;
        $books->title = $title;
        $books->Author_Name = $Author_Name;
        $books->admin_id = $admin_id;
        
       
        $books->save();
        return redirect()->back()->with('Success','books added successfully');

        
    }


    public function editbook($book_id){
        $books = books::where('book_id','=',$book_id)->first();
    
        return view('book.edit-book',compact('books'));

    }


    public function updatebook(Request $request){

        
        $request->validate([
          
            'book_id' => 'required',
            'title' => 'required',
            'Author_Name' => 'required',
            'admin_id' => 'required',
    
            
        ]);

        $book_id =$request->book_id;
        $title =$request->title;
        $Author_Name =$request->Author_Name;
        $admin_id =$request->admin_id;
        
       

        $books = new books();
        $books->book_id = $book_id;
        $books->title = $title;
        $books->Author_Name = $Author_Name;
        $books->admin_id = $admin_id;

        books::where('book_id','=',$book_id)->update([
            'book_id'=>$book_id,
            'title'=>$title,
            'Author_Name'=>$Author_Name,
            'admin_id'=>$admin_id,
            
            
        ]);

        return redirect()->back()->with('Success','book updated successfully');

    }


    public function deletebook($book_id){

        books::where('book_id','=',$book_id)->delete();
        return redirect()->back()->with('Success','book deleted successfully');


    }


 

}
