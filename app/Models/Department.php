<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class Department extends Model
{
    protected $table 	= 'department';
	protected $fillable = ['nameDepartment'];
	protected $guarded  = ['idDepartment'];
	protected $primaryKey = 'idDepartment';

	public function City()
	{
		return $this->hasMany(City::class,'department_id','idDepartment');
	}
}
