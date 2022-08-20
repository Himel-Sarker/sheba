<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment as ModelsAppointment;
use App\Models\User;
use Carbon\Carbon;
use App\Models\Department;
use App\Models\Profile;
use App\Models\Role;
use App\Models\Patient;
use App\Models\Pescription;
use Illuminate\Support\Facades\Hash;
use PDF;

class PatientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        $appointmentlist=ModelsAppointment::all();
        $date=Carbon::today()->toDateString();
        $todayappointments=ModelsAppointment::whereDate('created_at',$date)->get();
        $doctors=User::where('role_id',2)->get();
        return view('backend.patient.dashboard',compact('appointmentlist','doctors','todayappointments'));
    }
    public function index()
    {
        $patients= User::where('role_id',3)->get();
        return view('backend.admin.patients.index',compact('patients'));
    }

    public function show($id){
        $doctor=User::with(['patient', 'role'])->findOrFail($id);
        return view('backend.admin.patients.show',compact('doctor'));
    }

    public function pescription_list($id){
        $user_role = User::select('role_id')->find($id);
        if ($user_role->role_id == 2) {
            $pescriptions=Pescription::where('doctor_id', $id)->get();
        }elseif ($user_role->role_id == 3) {
            $pescriptions=Pescription::where('patient_id', $id)->get();
        }
        return view('backend.admin.patients.pescription_list',compact('pescriptions'));
    }

    public function pescriptionpdf($id){
        $pescription=Pescription::find($id);
        $pdf=PDF::loadView('backend.admin.report.pescriptionpdf',compact('pescription'));
        return $pdf->download('pescription_'.$id.'.pdf');
    }

    public function edit($id){
        return view('backend.admin.patients.edit',[
            'rols'=>Role::all(),
            'patients'=>User::with(['patient', 'role'])->findOrFail($id)
        ]);
    }

    public function create(){
        return view('backend.admin.patients.create',[
            'rols'=>Role::all(),
        ]);
    }

    public function pescripton_create(){
        return view('backend.admin.patients.pescription_create',[
            'doctors' => Profile::select('user_id')->get(),
            'patients' => Patient::select('user_id')->get()
        ]);
    }


    public function store(Request $request){
        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'password'=>'required',
        ]);

        try {
            $user = User::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'role_id'=>3,
            ]);

            Patient::create([
                'user_id'=>$user->id,
                'gender'=>$request->gender,
                'phone'=>$request->phone,
                'dob'=>$request->dob,
                'city'=>$request->city,
                'state'=>$request->state,
                'address'=>$request->address,
            ]);


            return back()->with('success','Data Save Success');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }

    }

    public function pescripton_store(Request $request){
        
        $this->validate($request,[
            'doctor_id'=>'required',
            'patient_id'=>'required'
        ]);

        try {
            Pescription::create([
                'doctor_id'=>$request->doctor_id,
                'patient_id'=>$request->patient_id,
                'disease'=>$request->disease,
                'symptoms'=>$request->symptoms,
                'procedure'=>$request->procedure
            ]);

            return back()->with('success','Data Save Success');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }

    }

    public function update(Request $request, $id){
        $this->validate($request,[
            'doctor_id'=>'required',
            'patient_id'=>'required'
        ]);

        try {
            Pescription::where('id',$id)->update([
                'doctor_id'=>$request->doctor_id,
                'patient_id'=>$request->patient_id,
                'disease'=>$request->disease,
                'symptoms'=>$request->symptoms,
                'procedure'=>$request->procedure
            ]);


            return back()->with('success','Data Save Success');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }

    }

    public function destroy($id)
    {
        $user =  User::findOrFail($id);
        $patient = Patient::where('user_id',$user->id)->first();
        $patient->delete();
        $user->delete();
        return back()->with('message','Delete Success');
    }

}
