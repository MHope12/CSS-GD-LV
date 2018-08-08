<?php

namespace App\Http\Controllers;

use App\Models\Dependency as DependM;

use Illuminate\Http\Request;

class DependencyController extends Controller
{
    
    public function index()
    {
        $depend = DependM::all();
        return view ('depend.listD', compact('depend'));
    }

    // public function create()
    // {
    //     return view ('depend.newD');
    // }

    // public function store(Request $request)
    // {
    //     $depend = new DependM;
    //     $depend->create($request->all());
    //     return redirect('depend.listD');
    // }

    // public function edit($idDependency)
    // {
    //     $depend = DependM::find($idDependency);
    //     return view('depend.updateD', compact('depend'));
    // }
    
    // public function update(Request $request, $idDependency)
    // {
    //     $depend = DependM::find($idDependency);
        
    //     $depend->nameDependency = $request->nameDependency;

    //     $depend->save();

    //     return redirect('depend.listD');
    // }
    
}
