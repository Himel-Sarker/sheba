<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use PDOException;

class DepartmentController extends Controller
{
    public function index(){
     
        $departments=Department::all();
        return view('backend.admin.department.index',compact('departments'));
    }
    public function create(){

        return view('backend.admin.department.create');
    }
    public function store(Request $request){

        $data=$request->all();
        try {
            Department::create([
                'name'=>$data['department_name'],
            ]);
            return redirect()->route('departments.index')->withMessage('Successfully Added Department !');
            
        } catch (QueryException $ex) {
            
            return redirect()->back()->withInput()->withErrors($ex->getMessage());
        }
        
    }
}
