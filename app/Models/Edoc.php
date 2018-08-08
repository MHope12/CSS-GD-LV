<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\MailE;

class Edoc extends Model
{
    protected $table    = 'edoc';
    protected $fillable = ['nameEdo','mail_id'];
    protected $guarded  = ['idEdoc'];
    protected $primaryKey = 'idE';

    public function MailE()
    {
    	return $this->belongsTo(MailE::class, 'mail_id', 'idMail');
    }
}
