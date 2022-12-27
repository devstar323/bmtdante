<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    //
    protected $table = 'weeks';
    public $timestamps = false; 
    protected $fillable = [
           'name','monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday', 'sunday',
    ];
}
