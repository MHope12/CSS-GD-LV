<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;
USE Excel;

class DepartmentController extends Controller
{

    public function index()
    {
        $depto = Department::all();
        return view('department.listaDe', compact('depto'));
    }

    public function cargue()
    {
        $depto = Department::all();
        return view('department.nuevODe', compact('depto'));
    }

    public function importExcel(Request $request)
    {
        $request->validate([
            'import_file' => 'required'
        ]);
 
        $path = $request->file('import_file')->getRealPath();
        $data = Excel::load($path)->get();
 
        if($data->count()){
            foreach ($data as $key => $value) {
                $arr[] = ['codDeprt' => $value->coddeprt, 'nameDeprt' => $value->namedeprt];
            }
            if(!empty($arr)){
      
                Department::insert($arr);
            }
        }
 
        return redirect('listaDe');
    }


}
