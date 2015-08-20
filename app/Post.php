<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;

    protected $dates = ['published_at','created_at','updated_at','deleted_at'];

    protected $fillable = [
        'title',
        'content',
        'slug',
        'user_id',
        'published_at'
    ];

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        if(!$this->exists){
            $this->attributes['slug'] = str_slug($value);
        }
    }

    public function setSlugAttribute($value)
    {
        $this->attributes['slug'] = str_slug($value);
    }

    public function getSlugAttribute()
    {
        return $this->published_at->format('Y/m/d').'/'.$this->attributes['slug'];
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
