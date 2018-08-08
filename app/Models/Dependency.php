<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Dependency_Mail;

class Dependency extends Model
{
    protected $table = 'dependency';
    protected $fillable = ['nameDependency']; 
    protected $guarded = ['idDependency'];
    protected $primaryKey = 'idDependency';

    public function User()
	{
		return $this->hasMany(User::class,'dependency_id','idDependency');
	}

	public function Dependency_Mail()
    {
        return $this->hasMany(Dependency_Mail::class, 'dependency_id', 'idDependency');
    }

    public function mail()
    {
        return $this->belongsToMany(MailE::class,'Dependency_Mail ','dpendency_id','mail_id');
    } 
}

