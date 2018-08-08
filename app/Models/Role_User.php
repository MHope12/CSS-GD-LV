<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Role;
use App\User;

class Role_User extends Model
{
    protected $table   = 'role_user';
    protected $filable = ['role_id', 'user_id'];
    protected $guarded = ['nRU'];
    protected $primaryKey = 'nRU';

    public function Role()
    {
    	return $this->belongsTo(Role::class, 'role_id', 'idRole');
    }

    public function User()
    {
    	return $this->belongsTo(User::class, 'user_id', 'idUser');
    }
}
