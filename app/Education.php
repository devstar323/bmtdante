<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    //
    protected $table = 'educations';
    protected $fillable = [
           'high_name', 'high_CSC', 'high_year', 'high_degree', 'high_study', 'high_spec', 'col_name', 'col_CSC', 'col_year', 'col_degree', 'col_study', 'col_spec', 'grad_name', 'grad_CSC', 'grad_year', 'grad_degree', 'grad_study', 'grad_spec', 'edu_add_info'
    ];

    public function docusign()
    {
        return $this->hasMany('App\Docusign');
    }
}