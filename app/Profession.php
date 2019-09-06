<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    //
    protected $fillable = ['title'];

    protected $casts = [
      'is_admin' => 'boolean'
    ];
}
