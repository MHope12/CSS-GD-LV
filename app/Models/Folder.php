<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;
use App\Models\Folder_User;
use App\Models\Clients;

class Folder extends Model
{
    protected $table    = 'folder';
    protected $fillable = ['nameFolder','client_id'];   
    protected $guarded  = ['idFolder'];
    protected $primaryKey = 'idFolder';

    public function Client()
    {
        return $this->belongsTo(Clients::class, 'client_id', 'idClient');
    }

    public function MailE()
    {
        return $this->hasMany(MailE::class, 'email_id', 'idMail');
    }

    public function Folder_User()
    {
        return $this->belongsTo(Folder::class, 'folder_id', 'idFolder');
    }

}
