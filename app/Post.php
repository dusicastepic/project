<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable=[
        'title',
        'category_id',
        'photo_id',
        'body',
        'tags'

    ];

    public function user(){
     return $this->belongsTo('App\User');#relationship with user
    }

    public function photo(){
     return $this->belongsTo('App\Photo');#relationship with photo; this post has one photo
    }

    public function category(){
        return $this->belongsTo('App\Category');#relationship with photo
    }
}
