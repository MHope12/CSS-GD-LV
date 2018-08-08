<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\StorageWay;
use App\Models\Folder;
use App\Models\Edoc;
use App\Models\Dependency_Mail;
use App\Models\City;

class MailE extends Model
{
    protected $table    = 'mailES';
    protected $fillable = [
        'idMail2', 
        'codEnterprise',
        'sentDate',  
        'sender', 
        'addressee',
        'folder_id' ,
        'affair', 
        'obervations',
        'storagew_id',  
        'noPages',
        'deliveredToArchive',
        'CompanyMssgr' ,
        'nameMessenger',
    ];   
    protected $guarded  = ['idMail'];
    protected $primaryKey = 'idMail';

    public function Folder()
    {
    	return $this->belongsTo(Folder::class, 'email_id', 'idMail');
    }

    public function StorageWay()
    {
        return $this->belongsTo(StorageWay::class, 'storagew_id', 'idStorageWay'); 
    }

    public function Dependency_Mail()
    {
        return $this->hasMany(Dependency_Mail::class, 'mail_id', 'idMail');
    }

    public function Edoc()
    {
        return $this->hasMany(Edoc::class, 'mail_id', 'idMail');
    }

    public function City()
    {
        return $this->belongsTo(City::class, 'city_id', 'idCity');
    }

}
