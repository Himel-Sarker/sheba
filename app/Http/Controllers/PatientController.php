<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){

   

        $appointmentlist=Appointment::all();
        $date=Carbon::today()->toDateString();
        $todayappointments=Appointment::whereDate('created_at',$date)->get();
        $doctors=User::where('role_id',2)->get();
        return view('backend.patient.dashboard',compact('appointmentlist','doctors','todayappointments'));
    
     }
}
