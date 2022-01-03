<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class crudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $display=DB::table('students')->get();
      // dd($display);
        return view('crudHome',['students'=>$display]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('students')->insert([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);
        return redirect(route('index'))->with('status','  Successfully!Your Data Insert Succefully');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
            $students=DB::table('students')->find($id);
            return view('editform',['students'=>$students]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        DB::table('students')->where('id',$id)->update([
            'name'=>$request->name,
            'city'=>$request->city,
            'marks'=>$request->marks,
        ]);
        return redirect(route('index'))->with('status','  Successfully!Your Data Update Succefully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       DB::table('students')->where('id',$id)->delete();
       return redirect(route('index'))->with('delete','  Successfully!Your Data DELETE Succefully');
    }
   
  
}
