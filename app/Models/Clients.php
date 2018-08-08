<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Folder;

class Clients extends Model
{
    protected $table 	= 'clients';
    
    protected $fillable = [
    	'nitClient', 
    	'nameClient', 
    	'personClient', 
    	'addressClient', 
    	'typeClient'
    ];

    protected $guarded	= ['idClient'];								
    protected $primaryKey = 'idClient';

    public function Folder()
    {
    	return $this->hasMany(Folder::class, 'client_id', 'idClient');
    }

}
