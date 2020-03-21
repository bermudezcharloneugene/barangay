<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'persons';
    protected $primaryKey = 'person_id';
    public $timestamps = false;

    protected $fillable = [
        'image_path',
        'first_name',
        'middle_name',
        'last_name',
        'address',
        'street_code',
        'age',
        'birthday',
        'gender',
        'contact_no',
        'pwd',
        'osy'
    ];
}
