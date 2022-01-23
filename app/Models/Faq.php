<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    protected $fillable = ['title', 'details','title_fa','details_fa'];
    public $timestamps = false;
}
