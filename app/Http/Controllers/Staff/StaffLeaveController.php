<?php

namespace App\Http\Controllers\Staff;
use App\Http\Controllers\Controller;
use App\Models\leave;
use Illuminate\Http\Request;

class StaffLeaveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $user  = session('user');
        $staff = leave::where('user_id',$user->id)->paginate('10');
        return view('StaffManagement.ShowLeaves',compact('staff'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('StaffManagement.AddLeave');
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
            'from'   => 'required',
            'to'     => 'required',
            'reason' => 'required',
            
            
        ],["from.required"=>"required"]);
    
        if($validatedData){
            $from   = $request->from;
            $to     = $request->to;
            $reason = $request->reason;
            $user   = session('user');
        }
             $data  = new leave();

               /* save data */ 
                $data->leave_from_date  = $from;
                $data->leave_to_date    = $to;
                $data->reason           = $reason;
                $data->status           = "pending";
                $data->department_id    = $user->department_id;
                $data->user_id          = $user->id;
               
            if($data->save()){
                return redirect('/ShowLeaves')->with('msg','Successfully Inserted data.');
               // Toastr::info('qwwwewewewewewe','Success');
            } else {
                return back()->with('err','Something went wrong');
            }
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = leave::where('id',$id)->first();
        return view('StaffManagement.ViewLeave',compact('data'));
    }

}
