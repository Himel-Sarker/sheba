<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Doctor;
use App\Models\Profile;
use App\Models\Role;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Promise\all;
use function PHPUnit\Framework\isNull;

class DoctorController extends Controller
{
/*    public function store(Request $request)
    {

//        return $request;
//
        foreach ($request->day as $item => $value){
            foreach ($value as $item) {
                foreach ($item as $key => $val){
                    return $val;
                }
            }
        }
        exit();



        $data=$request->all();
        $path='public/products';
        $image=$request->file('image');
        $image_name=time().$image->getClientOriginalName();
        $request->file('image')->storeAs($path,$image_name);

        try {
            $role_id = 2;
            $user = User::create([
                "department_id "=>$request->department,
                "role_id  "=> $role_id,
                "email" => $request->email,
                "password"=>Hash::make($request->password),
                "first_name"=>$request->fname,
                "last_name"=>$request->lname,
            ]);



            $user=User::latest()->first();

            $user_id=$user->id;
            $profileData=[];
            $profileData['user_id']=$user_id;
            $profileData['gender']=$data['gender'];
            $profileData['phone']=$data['phone'];
            $profileData['dob']=$data['dob'];
            $profileData['nid']=$data['nid'];
            $profileData['degree']=$data['degree'];
            $profileData['join_date']=$data['join_date'];
            $profileData['city']=$data['city'];
            $profileData['state']=$data['state'];
            $profileData['address']=$data['address'];
            $profileData['bio']=$data['bio'];
            $profileData['image']=$data['image'];

            Profile::create($profileData);

            return redirect()->route('doctors.index')->withMessage('Successfully Saved');


        }catch (Exception $exception){
            return $exception->getMessage();
        }

















//
//        $data['role_id']=3;
//        $data['image']=$image_name;



//        try {
//            User::create([
//             'first_name'=>$data['fname'],
//             'last_name'=>$data['lname'],
//             'email'=>$data['email'],
//             'password'=>$data['password'],
//             'department_id'=>$data['department'],
//             'role_id'=>3,
//
//            ]);
//
//            $user=User::latest()->first();
//            $user_id=$user->id;
//            $profileData=[];
//            $profileData['user_id']=$user_id;
//            $profileData['gender']=$data['gender'];
//            $profileData['phone']=$data['phone'];
//            $profileData['dob']=$data['dob'];
//            $profileData['nid']=$data['nid'];
//            $profileData['degree']=$data['degree'];
//            $profileData['join_date']=$data['join_date'];
//            $profileData['city']=$data['city'];
//            $profileData['state']=$data['state'];
//            $profileData['address']=$data['address'];
//            $profileData['bio']=$data['bio'];
//            $profileData['image']=$data['image'];
//
//            Profile::create($profileData);
//
//            return redirect()->route('doctors.index')->withMessage('Successfully Saved');
//
//        } catch (Exception $ex) {
//            dd($ex);
//        }
    }*/



    public function index()
    {

        $doctors= User::where('role_id',2)->get();

        return view('backend.admin.doctors.index',compact('doctors'));

    }
    public function show($id){

        $doctor=User::with(['profile', 'role', 'department'])->findOrFail($id);
        return view('backend.admin.doctors.show',compact('doctor'));
    }

    public function create(){
        $departments = Department::all();

        return view('backend.admin.doctors.create',[
            'departments' => Department::all(),
            'rols'=>Role::all(),
        ]);
    }


    public function store(Request $request){


        $this->validate($request,[
            'first_name'=>'required',
            'last_name'=>'required',
            'email'=>'required',
            'password'=>'required',
            //'role_id'=>'required|integer',
            'department_id'=>'required|integer',
            'image' => 'required'
        ]);

        $mainArray = [];

        foreach ($request->tags as $key => $tag){
            foreach ($request->day as $date){
                $key = str_replace(['\'', '"'], "", $key);
                if ($key == $date){
                    $mainArray [$key]= [
                        "times" =>  $tag,
                    ];
                }
            }
        }

        try {

            if ($request->hasFile('image')){
                $image = $request->file('image');
                $image_name = time().$image->getClientOriginalName();
                $image->storeAs('public/doctors',$image_name);
            }

            $user = User::create([
                'first_name'=>$request->first_name,
                'last_name'=>$request->last_name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                'role_id'=>2,
                'department_id'=>$request->department_id,
            ]);

            Profile::create([
                'user_id'=>$user->id,
                'gender'=>$request->gender,
                'phone'=>$request->phone,
                'dob'=>$request->dob,
                'join_date'=>$request->join_date,
                'nid'=>$request->nid,
                'degree'=>$request->degree,
                'city'=>$request->city,
                'state'=>$request->state,
                'bio'=>$request->bio,
                'address'=>$request->address,
                'image'=>$image_name ?? " ",
                'time_table' => json_encode($mainArray),
            ]);


            return back()->with('success','Data Save Success');
        }catch (\Exception $exception){
            return $exception->getMessage();
        }

    }

    public function destroy($id)
    {
        $user =  User::findOrFail($id);
        $profile = Profile::where('user_id',$user->id)->first();
//        unlink('storage/doctors/'.$profile->image);
        $profile->delete();
        $user->delete();
        return back()->with('message','Delete Success');
    }












}
