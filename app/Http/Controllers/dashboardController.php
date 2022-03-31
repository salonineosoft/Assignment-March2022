<?php

namespace App\Http\Controllers;
use App\Models\user;
use App\Models\leave;
use Illuminate\Http\Request;

class dashboardController extends Controller
{

    // Admin Dashboard Controller
    public function HodDashboard() {
        $user  = session('user');
        $count = user::where('department_id',$user->department_id)->where('role_id',1)->count();
        return view('HodManagement.HodDashboard',compact('count'));
    
    }

    // Staff Dashboard Controller
    public function dashboardStaff() {
        $user  = session('user');
        $rejected = leave::where('status','rejected')->where('user_id',$user->id)->count();
        $approved = leave::where('status','approved')->where('user_id',$user->id)->count();
        $total = leave::where($user->status)->where('user_id',$user->id)->count();
        return view('StaffManagement.dashboardStaffMain',compact('rejected','approved','total'));
    }

    // Logout Controller
     public function logout(){
        session()->pull('user');
        session()->pull('count');
        return redirect('/logins')->with('msgg','Successfully Logout.');
        
    }
     
    // First Page Controller
    public function first() {
        return view('FirstPage');
    }

}
