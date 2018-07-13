<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rolepermision extends Model
{
    protected $table="role_has_permissions";

    protected $fillable = [
        'permission_id', 'role_id'
    ];

     protected $casts = [
        'permission_id' => 'integer',
        'role_id' => 'integer',
    ];

    public function permissionid()
    {
        return $this->hasOne(permision::class, 'id', 'permission_id');
    }

    public function roleid()
    {
        return $this->hasOne(role::class, 'id', 'role_id');
    }
}
