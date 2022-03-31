<?php

namespace App\Http\Controllers\HOD;
use App\Http\Controllers\Controller;
use App\Models\leave;
use Illuminate\Http\Request;

class LeaveManagementHodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user  = session('user');
        $staff = leave::where('department_id',$user->department_id)->paginate('10');
        return view('HodManagement.ShowStaffLeaves',compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('StatusUpdateHod');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dataa=leave::all()->where('id',$id)->first();
        return view('HodManagement.StatusUpdateHod',compact('dataa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $data   = leave::where('id',$id)->update([    
        'status' => $request->status,
        ]);
       return redirect('/ShowStaffLeaves');
    }

}
