<?php

namespace App\Http\Controllers;

use App\Models\Folder as Project;
use App\Models\Clients as Client;

use Illuminate\Http\Request;


class FolderController extends Controller
{
    
    public function index(Request $request) 
    {
        $client = Client::all();
        $folder = Project::with('Client')->get();
        return view('folder.lista', compact('folder', 'client'));
    }

    public function list(Request $request) 
    {
        $client = Client::all();
        $folder = Project::with('Client')->get();
        return view('folder.lista', compact('client', 'folder'));
    }
   
    public function create()
    {
        $client = Client::all();
        return view ('folder.nuevo', compact('client'));
    }

    public function store (Request $request)
    {
        $folder = new Project;

        $folder->nameFolder = $request->nameFolder;
        $folder->client_id = $request->idClient;
 
        $folder->save();

        return redirect('folder.lista');
    }

    
    public function edit($idFolder)
    {
        $folder = Project::all();
        $client = Client::all();
        return view('folder.modificar', compact('folder', 'client'));
    }

    
    public function update(Request $request, $idFolder)
    {
        $folder = Project::find($idFolder);

        $folder->nameFolder = $request->nameFolder;
        $folder->client_id = $request->idClient;

        $folder->save();

        return redirect('folder.lista');
    }

}
