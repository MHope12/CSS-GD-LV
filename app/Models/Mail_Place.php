<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;
use App\Models\City;

class Mail_Place extends Model
{
    protected $table 	= 'mail_place';
    protected $fillable = ['mail_id', 'place_id'];
    protected $guarded 	= ['nMP'];
    protected $primaryKey = 'nMP'; 

    public function MailE()
    {
        return $this->belongsTo(MailE::class, 'mail_id', 'idMail');
    }

    public function City()
    {
        return $this->belongsTo(City::class, 'place_id', 'idCity');
    }
}
