<?php

namespace App\Http\Controllers;

use App\Models\Role_User as RUM;
use App\Models\Role as Role;
use App\User as User;

use Illuminate\Http\Request;

class RoleUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $role = Role::all();
        $user = User::all();
        $userole = RUM::with('User', 'Role')->get();
        return view('role_user.listaRU', compact('userole', 'role', 'user'));
    }

    public function list()
    {
        $role = Role::all();
        $user = User::all();
        $userole = RUM::with('User', 'Role')->get();
        return view('role_user.listaRU', compact('userole', 'role', 'user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $role = Role::all();
        $user = User::all();
        return view('role_user.nuevaRU', compact('role', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userole = new RUM;

        $userole->role_id = $request->idRole;
        $userole->user_id = $request->idUser;

        $userole->save();

        return redirect('user.listaU');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Role_User  $role_User
     * @return \Illuminate\Http\Response
     */
    public function edit($nRU)
    {
        $role = Role::all();
        $user = User::all();
        $userole = RUM::find($nRU);
        return view('role_user.updateRU', compact('userole', 'role', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Role_User  $role_User
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nRU)
    {
        $roleuser = RUM::find($nRU);

        $roleuser->role_id = $request->idRole;
        $roleuser->user_id = $request->idUser;

        $roleuser->save();

        return redirect('listaRU');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Role_User  $role_User
     * @return \Illuminate\Http\Response
     */
    public function destroy($nRU)
    {
        $roleuser = RUM::find($nRU);
        $roleuser->delete();
        return back();
    }
}
