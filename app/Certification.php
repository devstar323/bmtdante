<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certification extends Model
{
    //
    protected $table = 'certifications';
    protected $fillable = [
           'certi_info1', 'certi_info2', 'certi_info3'
    ];

    public function docusign()
    {
        return $this->hasMany('App\Docusign');
    }
}