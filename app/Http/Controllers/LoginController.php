<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData=$request->validate([
            'email'    => 'required',
            'password' => 'required',
        ]);
        if($validatedData){
           $data = user::where('email',$request->email)->first();
           if($data) {
            $password = $data->password;
            $pass     = $request->password;
                if($password == $pass) {
                    $request-> session()->put('user',$data);
                    $data   =  session('user');
                   if($data->role_id == 1){
                    return redirect('/dashboardStaffMain');
                   } else{
                    return redirect('/HodDashboard');
                   }
                }  else {
                    return back()->with('msg',"Incorrect password");
                }  
            } else {
                return back()->with('msg',"oops!!User not found");
            }
          
        }
    }   

}
