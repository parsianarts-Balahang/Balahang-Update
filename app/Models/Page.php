<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = ['title', 'title_fa', 'slug', 'details', 'details_fa','meta_tag','meta_description'];
    public $timestamps = false;
}
