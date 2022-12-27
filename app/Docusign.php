<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Docusign extends Model
{
    //
    protected $table = 'docusigns';
    protected $fillable = [
           'user_id', 'certi_id', 'edu_id', 'doc_date', 'doc_name', 'doc_first_name', 'doc_last_name', 'doc_address', 'doc_zip', 'doc_other_name', 'consumer_copy_free', 'SSN', 'doc_birth', 'DLN', 'doc_state', 'doc_city', 'doc_tele', 'doc_cell', 'doc_email', 'applied_pos', 'hear_info', 'legal_auth_state', 'require_sponsorship', 'avail_date', 'type_work', 'married_sep', 'married_join', 'married_head', 'driver_image'
    ];

    public function certi()
    {
        return $this->belongsTo('App\Certification');
    }

    public function edu()
    {
        return $this->belongsTo('App\Education');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}