<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aspect extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    /*
     * RELATIONS
     */
    
    public function image()
    {
        return $this->belongsTo('App\Image');
    }

    public function video()
    {
        return $this->belongsTo('App\Video');
    }

    public function donations()
    {
        return $this->hasMany('App\Donation');
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('id', 'desc');
    }

    /*
     * Scope for search aspects
     */
    public function scopeSearch($query, $term)
    {
        if($term)
        {
            $query->where(function ($q) use ($term){
                $q->where('title', 'LIKE', "%{$term}%");

                // $q->orwhereHas('author', function ($qr) use ($term){
                //     $qr->where('name', 'LIKE', "%{$term}%");
                // });
            });
        }
    }

    /*
     * Image Accessor
     */
    public function getImageUrlAttribute($value)
    {
        return asset('/').'assets/img/'.$this->image->file;
    }
    public function getDefaultImgAttribute($value)
    {
        return asset('/').'assets/img/'.'user-placeholder.png';
    }
}
