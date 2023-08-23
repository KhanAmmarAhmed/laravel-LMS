<?php

namespace App\Http\Controllers;
use App\Models\admins;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //////

    public function index() {
        $admins = admins::get();
        //return $data;
        return view('admin.admin-index',compact('admins'));

       }

    
    public function addadmin(){
        return view('admin.add-new-admin');
    }   

    public function saveadmin(Request $request){
        //dd($request->all());


        $request->validate([
          
            'admin_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
    
            
        ]);
    
        

       $admin_id =$request->admin_id;
        $name =$request->name;
        $email =$request->email;
        $password =$request->password;
       

        $admins = new admins();
        $admins->admin_id = $admin_id;
        $admins->name = $name;
        $admins->email = $email;
        $admins->password = $password;
       
        $admins->save();
        return redirect()->back()->with('Success','Admin added successfully');

        
    }


    public function editadmin($admin_id){
        $admins = admins::where('admin_id','=',$admin_id)->first();
    
        return view('admin.edit-admin',compact('admins'));

    }


    public function updateadmin(Request $request){

        
        $request->validate([
          
            'admin_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
    
            
        ]);

        $admin_id =$request->admin_id;
        $name =$request->name;
        $email =$request->email;
        $password =$request->password;
    
        $admins = new admins();
        $admins->admin_id = $admin_id;
        $admins->name = $name;
        $admins->email = $email;
        $admins->password = $password;

        admins::where('admin_id','=',$admin_id)->update([
            'admin_id'=>$admin_id,
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            
        ]);

        return redirect()->back()->with('Success','Admin updated successfully');

    }


    public function deleteadmin($admin_id){

        admins::where('admin_id','=',$admin_id)->delete();
        return redirect()->back()->with('Success','Admin deleted successfully');


    }


 

}
