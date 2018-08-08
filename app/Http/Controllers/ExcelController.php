<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Excel;

class ExcelController extends Controller
{
    public function index()
    {
        $city = City::all();
        return view('city.listaC', compact('city'));
    }

    public function cargue()
    {
        $city = City::all();
        return view('city.nuevaC', compact('city'));
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
                $arr[] = ['codCity' => $value->codcity, 'nameCity' => $value->namecity, 'department_id' => $value->deprt_id ];
            }
            if(!empty($arr)){
      
                City::insert($arr);
            }
        }
 
        return redirect('listaC');
    }


}
