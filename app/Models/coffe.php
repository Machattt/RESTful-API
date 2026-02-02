<?php

namespace App\Models;

use MongoDB\Laravel\Eloquent\Model;

class coffe extends Model
{
    protected $collection = 'salescoffe';
    protected $connection = 'mongodb';

    public $timestamps = false;
    protected $guarded = [];
}
