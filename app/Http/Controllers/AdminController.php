<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Access\Gate;
use Illuminate\Http\Request;
use App\Models\Admin;
use Session;
Session_start();
class AdminController extends Controller
{
    public function index(){
        return view('admin-login.index');
    }


    public function login(Request $request){

        // $request->validate( [
        //     'admin_name' => ['required', 'string', 'max:255'],
        //     'password' => ['required', 'string', 'min:8'],
        // ]);
   
       $password=md5($request->admin_password) ;
       $result = Admin::where('admin_name',$request->admin_name)->where('password',$password)->first();
      
       if ($result) {
          Session::put('id',$result->id);
          Session::put('admin_name',$result->admin_name);
          return redirect('/all-user-information');
       }else
       {
            Session::put('error_message','No account found for this Username !');
            return back();
       }
         
    }


    public function logout(){
        Session::flush();
        return view('admin-login.index');
    }


  

    


}
