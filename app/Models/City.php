<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'city';
    protected $fillable = ['codCity','nameCity','deprt_id'];
    protected $guarded = ['idCity'];
    protected $primaryKey = 'idCity';
}
