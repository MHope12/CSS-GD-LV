<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Role_User as RU;
use App\Models\Role;
use App\User;



class MainboardController extends Controller
{

	/*public function __construct()
	{
		$this->middleware('auth');
	}
	*/

    public function index()
    {
    	$roleuser = RU::all();
    	$role = Role::all();
    	$user = User::all();
    	return view('Principal', compact('roleuser', 'role', 'user'));
    }
}
