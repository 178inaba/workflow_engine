<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'system_name', 'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
