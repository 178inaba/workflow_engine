<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_id', 'id', 'name', 'email', 'password', 'authority',
    ];

    /**
     * user
     */
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
