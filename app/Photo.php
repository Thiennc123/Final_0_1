<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';

    protected $fillable = ['link','title','discript','status'];

    public function album()
    {
    	return $this->belongsToMany('App\Album','album_photo');
    }

    public function users()
    {
        return $this->belongsToMany('App\User','photo_user');
    }
}
