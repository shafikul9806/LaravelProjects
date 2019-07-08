<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class song extends Model
{
    protected $table = 'songs';
    protected $fillable = ['title','artist','album'];
}
