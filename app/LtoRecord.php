<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LtoRecord extends Model
{
    protected $fillable = [
        'email', 'status', ' image', 'role', 'class'
    ];
    public $incrementing = true;
}
