<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User as UserM;
use App\Models\typePerson as TPM;
use App\Models\Dependency as DM;

class UserController extends Controller
{

    public function index()
    {
        $typep  = TPM::all();
        $depend = DM::all();
        $user = UserM::with('TypePerson', 'Dependency')->get();
        return view('user.listU', compact('user','typep', 'depend'));
    }

    
    public function create()
    {
        $typep  = TPM::all();
        $depend = DM::all();
        return view('user.newU', compact('typep', 'depend'));
    }

    public function store(Request $request)
    {
        $user = new UserM;

        $user->codPerson      = $request->codPerson;
        $user->namePerson     = $request->namePerson;
        $user->lastnamePerson = $request->lastnamePerson;
        $user->email          = $request->email;
        $user->typePerson_id  = $request->idTypePerson;
        $user->dependency_id  = $request->idDependency;
        $user->password       = bcrypt($request->codPerson);

        $user->save();

        return view('role_user.nuevoRU');
    }

    public function edit($idUser)
    {
        $typep  = TPM::all();
        $depend = DM::all();
        $user = UserM::find($idUser);
        return view('user.updateU', compact('user','typep', 'depend'));

    }

    public function update(Request $request, $idUser)
    {             
        $user = UserM::find($idUser);

        $user->codPerson      = $request->codPerson;
        $user->namePerson     = $request->namePerson;
        $user->lastnamePerson = $request->lastnamePerson;
        $user->email          = $request->email;  
        $user->typePerson_id  = $request->idTypePerson;
        $user->dependency_id  = $request->idDependency;  
        $user->password       = $request->codPerson;

        $user->save();

        return redirect('user');
    }

    public function search (Request $request)
    {
        $user = UserM::where('userPerson', 'like','%'.$request->userName.'%')->get();
    }

    public function destroy($idUser)
    {
        $user = UserM::find($idUser);
        $user->delete();
        return back();
    }

    public function Profile()
    {
        return view('profile');
    }

    public function Others()
    {
        return view('others');
    }
}
    