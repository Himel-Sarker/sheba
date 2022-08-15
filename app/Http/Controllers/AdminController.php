<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

use Auth;

class AdminController extends Controller
{
 public function index(){

   

    $appointmentlist=Appointment::all();
    $date=Carbon::today()->toDateString();
    $todayappointments=Appointment::whereDate('created_at',$date)->get();
    $doctors=User::where('role_id',2)->get();
    return view('backend.admin.dashboard',compact('appointmentlist','doctors','todayappointments'));

 }
}
