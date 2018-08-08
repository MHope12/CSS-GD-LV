<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Permission;
use App\Models\Role;

class Permission_Role extends Model
{
    protected $table = 'permission_role';
    protected $fillable = ['permission_id', 'role_id'];
    protected $guarded = ['nPR'];
    protected $primaryKey = 'nPR';

    public function Roles() 
    {
        return $this->belongsTo(Role::class,'role_id', 'idRole');
    }

    public function Permissions()
    {
        return $this->belongsTo(Permission::class, 'permission_id', 'idPermission');
    }
}
