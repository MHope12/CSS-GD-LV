<?php

namespace App\Http\Controllers;

use App\Models\StorageWay as SWM;

use Illuminate\Http\Request;

class StorageWayController extends Controller
{
   
    public function index()
    {
        $storagew = SWM::all();
        return view('storagew.listSW', compact('storagew'));
    }

    
    public function create()
    {
        return view ('storagew.newSW');
    }

    
    public function store(Request $request)
    {
        $storagew = new SWM;
        $storagew->create($request->all());
        return redirect('storagew.listSW');
    }

    
    public function edit($idStorageWay)
    {
        $storagew = SWM::find($idStorageWay);
        return view('storagew.updateSW', compact('storagew'));
    }

   
    public function update(Request $request, $idStorageWay)
    {
        $storagew = SWM::find($idStorageWay);

        $storagew->nameSW = $request->nameSW;

        $storagew->save();

        return redirect('storagew.listSW');
    }

    public function search(Request $request)
    {
        $storagew = SWM::where('idStorageWay', 'like','%'.$request->idStorageWay.'%')->get();

        return view ('storagew.listSW', compact('storagew'));
    }
    
    public function destroy($idStorageWay)
    {
        $storagew = SWM::find($idStorageWay);
        $storagew->delete();
        return back();
    }

}
