<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['user_id','title','title_fa','details','details_fa','photo'];
    public $timestamps = false;
}
