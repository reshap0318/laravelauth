<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class userpermision extends Model
{
    protected $table="model_has_permissions";

    protected $fillable = [
        'permission_id', 'model_type','model_id'
    ];

     protected $casts = [
        'permission_id' => 'integer',
        'model_type' => 'string',
        'model_id' => 'integer',
    ];

    public function cobalagi()
    {
        return $this->hasOne(permision::class, 'id', 'permission_id');
    }

    public function userid()
    {
        return $this->hasOne(User::class, 'id', 'model_id');
    }

    
}
