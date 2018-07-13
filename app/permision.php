<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class permision extends Model
{
    protected $table="permissions";

    protected $fillable = [
        'name', 'guard_name'
    ];

     protected $casts = [
        'name' => 'string',
        'guard_name' => 'string',
    ];
}
