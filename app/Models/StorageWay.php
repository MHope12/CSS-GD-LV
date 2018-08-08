<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;

class StorageWay extends Model
{
    protected $table    = 'storageway';
    protected $fillable = ['nameSW'];
    protected $guarded  = 'idStorageWay';
    protected $primaryKey = 'idStorageWay';

    public function MailE()
    {
		return $this->hasMany(MailE::class, 'storagew_id', 'idStorageWay');
    }
}
