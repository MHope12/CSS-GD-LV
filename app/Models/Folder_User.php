<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;
use App\User;

class Folder_User extends Model
{
    protected $table    = 'folder_user';
    protected $fillable = ['user_id','folder_id'];
    protected $guarded  = ['nFU'];
    protected $primaryKey = 'nFU';

    public function User()
    {
    	return $this->belongsTo(User::class, 'user_id', 'idUser');
    }

    public function Folder()
    {
    	return $this->belongsTo(Folder::class, 'folder_id', 'idFolder');
    }
}
