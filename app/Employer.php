<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'role', 'first_name', 'last_name'	, 'phone', 'company_name',
    ];

}
