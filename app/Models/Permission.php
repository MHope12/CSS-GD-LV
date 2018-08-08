<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission_Role;
use App\Models\Role;

class Permission extends Model
{
    protected $table = 'permission';
    protected $fillable = ['namePermission','description'];
    protected $guarded = ['idPermission'];
    protected $primaryKey = 'idPermission';

    public function role()
    {
    	return $this->belongsToMany(Role::class, 'Permission_Role', 'idPermission', 'idRole');
    }
}

