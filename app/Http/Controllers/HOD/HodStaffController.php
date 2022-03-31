<?php

namespace App\Http\Controllers\HOD;
use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class HodStaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = session('user');
        $staff = user::where('department_id',$user->department_id)->paginate('10');
        return view('HodManagement.ShowStaff',compact('staff'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = user::where('id',$id)->first();
        return view('HodManagement.ViewStaff',compact('data'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = user::find($id)->delete();
        return redirect('/ShowStaffs');
    }
}
