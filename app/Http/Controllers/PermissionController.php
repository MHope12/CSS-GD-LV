<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Permission as PM;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permiss = PM::all();
        return view('permission.listPr', compact('permiss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('permission.listPr');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permiss = new PM;
        $permiss->create($request->all());
        return back();
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
    public function edit($idPermission)
    {
        $permiss = PM::find($idPermission);
        return view('permission.updatePr', compact('permiss'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idPermission)
    {
        $permiss = PM::find($idPermission);

        $permiss->namePermission = $request->namePermission;
        $permiss->description = $request->description;

        $permiss->save();

        return redirect('permission.listPr');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($idPermission)
    {
        $permiss = PM::find($idPermission);
        $permiss->delete();
        return back();
    }
}
