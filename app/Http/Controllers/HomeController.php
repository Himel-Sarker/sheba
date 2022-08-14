<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected function index(){
        echo auth()->user()->role_id;
        // if(auth()->user()->role_id == 1){
            
        //     return redirect()->route('admin.dashboard');
        //  }
        //  else if(auth()->user()->role_id == 2){
        //   //  echo 'okkkkkkkk555';
        //     return redirect()->route('doctor.dashboard');
        //  }
        //  else if(auth()->user()->role_id == 3){
        //     return redirect()->route('patient.dashboard');
        //  }
    }
}
