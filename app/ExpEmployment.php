<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpEmployment extends Model
{
    //
    protected $table = 'exp_employments';
    protected $fillable = [
           'com_name', 'com_address', 'em_from', 'em_to', 'job_title', 'supervisor', 'reason_leave', 'work_perform', 'contact_employer', 'add_info'
    ];
}