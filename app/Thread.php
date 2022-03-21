<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $fillable = ['title','body'];
    
    public function user()
    {
        return $this->belongsTo('App\User');
    }
    
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
