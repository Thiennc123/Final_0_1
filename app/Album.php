<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $table = 'albums';

    protected $fillable = ['link','title','discript','status', 'status', 'user_id'];

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function photos()
    {
    	return $this->belongsToMany('App\Photo', 'album_photo');
    }

    
}
