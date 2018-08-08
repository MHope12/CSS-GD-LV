<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;
use App\Models\Dependency;

class Dependency_Mail extends Model
{
    protected $table 	= 'mail_dependency';
    protected $fillable = ['mail_id', 'dependency_id'];
    protected $guarded 	= ['nMD'];
    protected $primaryKey = 'nMD';

    public function MailE()
    {
    	return $this->hasMany(MailE::class, 'mail_id', 'idMail');
    }

    public function Dependency()
    {
    	return $this->hasMany(Dependency::class, 'dependency_id', 'idDependency');
    }
}
