<?php

namespace App\Http\Controllers;

use App\Models\typePerson as TPM;

use Illuminate\Http\Request;

class TypePersonController extends Controller
{
    
    public function index()
    {
        $typep = TPM::all();
        return view('typePerson.listTP', compact('typep'));
    }

    public function create()
    {
        return view('typePerson.newTP');
    }
    
    public function store(Request $request)
    {
        $typep = new TPM;
        $typep->create($request->all());
        return redirect('typePerson.listTP');
    }

   
    public function edit($idTypePerson)
    {
        $typep = TPM::find($idTypePerson);
        return view('typePerson.updateTP', compact('typep'));
    }

   
    public function update(Request $request, $idTypePerson)
    {
        $typep = TPM::find($idTypePerson);

        $typep->nameTypePerson = $request->nameTypePerson;

        $typep->save();

        return redirect('typePerson.listTP');
    }
    
    public function destroy($idTypePerson)
    {
        $typep = TPM::find($idTypePerson);
        $typep->delete();
        return back();
    }
}
