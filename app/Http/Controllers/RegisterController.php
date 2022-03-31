<?php

namespace App\Http\Controllers;

use App\Models\department;
use App\Models\role;
use App\Models\user;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $department = department::all();
        $role = role::all();
        return view('register',compact('department','role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
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
            'name'          => 'required|max:200',
            'email'         => 'required|unique:users',
            'password'      => 'required|max:200',
            'contact'       => 'required|min:10|numeric',
            'department_id' => 'required',
            'role_id'       => 'required',
            'image'         => 'required|mimes:jpg,png,jpeg,gif,svg',
        ]);
        if($validatedData){
             $filename="Image-".time().".".$request->image->extension();
            if($request->image->move(public_path('uploads'),$filename)) {
                user::insert([
                    'name'          => $request->name,
                    'email'         => $request->email,
                    'password'      => $request->password,
                    'contact'       => $request->contact,
                    'department_id' => $request->department_id,
                    'role_id'       => $request->role_id,
                    'image'         => $filename
                ]);
                    return redirect('/logins')->with('msg',"Registered successfully");
            }
        } else {
            return back()->with('err',"Something Wrong");
        }

    }
        

}
