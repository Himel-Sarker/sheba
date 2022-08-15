<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Models\Test;
use Illuminate\Database\QueryException;
use PDF;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        $testlist=Service::paginate(12);
        return view('backend.admin.service.index',compact('testlist'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Test::all();

         return view('backend.admin.service.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request)
    {
        $data=$request->all();
       
        try {

            Service::create([
                'category_id'=>$data['test_categoy'],
                'service_name'=>$data['service_name'],
                'price'=>$data['price'],
            ]);
            return redirect()->route('service.index')->withMessage('Successfully Added New Test !');
            
        
          }catch (QueryException $ex) {
            return redirect()->back()->withInput()->withErrors($ex->getMessage());
          }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateServiceRequest  $request
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
        //
    }
     
    public function pdf(){
        $list=Service::all();
        $pdf = PDF::loadView('backend.admin.report.pricelistpdf',compact('list'));
        return $pdf->download('pricelist.pdf');

    }
}
