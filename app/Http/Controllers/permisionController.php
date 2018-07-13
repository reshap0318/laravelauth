<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\permision;

class permisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permisions = permision::all();
        return view('admin.permision.index',compact('permisions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.permision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permisions = new permision;
        $permisions->name = $request->name;
        $permisions->guard_name = $request->guard_name;
        $permisions->save();
        return redirect()->route('permision.index');
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
        $permisions = permision::find($id);
        return view('admin.permision.edit',compact('permisions'));
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
        $permisions = permision::find($id);
        $permisions->name = $request->name;
        $permisions->guard_name = $request->guard_name;
        $permisions->save();
        return redirect()->route('permision.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $permisions = permision::find($id);  
        $permisions->delete();
        return redirect()->route('permision.index'); 
    }
}
