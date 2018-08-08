<?php

namespace App\Http\Controllers;

use App\Models\Permission_Role as PRM;
use App\Models\Permission as Permission;
use App\Models\Role as Role;

use Illuminate\Http\Request;

class PermissionRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permission = Permission::all();
        $role = Role::all();
        $permisrole = PRM::with('Permissions', 'Roles')->get();
        return view('permission_role.listPR', compact('permisrole','permission', 'role'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::all();
        $role = Role::all();
        return view('permission_role', compact(['permission', 'role']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $permisrole = new PRM;

        $permisrole->permission_id = $request->idPermission;
        $permisrole->role_id = $request->idRole;

        $permisrole->save();

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Permission_Role  $permission_Role
     * @return \Illuminate\Http\Response
     */
    public function edit($nPR)
    {
        $role = Role::all();
        $permission = Permission::all();
        $permisrole = PRM::find($nPR);
        return view('permission_role.updatePR', compact('permisrole','permission','role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Permission_Role  $permission_Role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $nPR)
    {
        $permisrole = PRM::find($nPR);

        $permisrole->permission_id = $request->idPermission;
        $permisrole->role_id = $request->idRole;

        $permisrole->save();

        return redirect('permission_role.listPR');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Permission_Role  $permission_Role
     * @return \Illuminate\Http\Response
     */
    public function destroy($nPR)
    {
        $permisrole = PRM::find($nPR);
        $permisrole->delete();
        return back();
    }


}
