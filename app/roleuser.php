<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class roleuser extends Model
{
    protected $table="model_has_roles";

    protected $fillable = [
        'role_id', 'model_type','model_id'
    ];

     protected $casts = [
        'role_id' => 'integer',
        'model_type' => 'string',
        'model_id' => 'integer',
    ];

    public function userid()
    {
        return $this->hasOne(User::class, 'id', 'model_id');
    }

    public function roleid()
    {
        return $this->hasOne(role::class, 'id', 'role_id');
    }
}
