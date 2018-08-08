<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class typePerson extends Model
{
    protected $table = 'typePerson';
    protected $fillable = ['nameTypePerson'];
    protected $guarded = ['idTypePerson'];
    protected $primaryKey = 'idTypePerson';

    public function User()
	{
		return $this->hasMany(User::class,'typePerson_id','idTypePerson');
	} 
}
