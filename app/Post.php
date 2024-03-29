<?php

namespace App;

use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category')->withTimestamps();
    }
    public function tags()
    {
        return $this->belongsToMany('App\Tag')->withTimestamps();
    }
    public function favoriteToUser()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function scopeApproved($query)
    {
        return $query->where('is_approved', 1);
    }
    public function scopePublished($query)
    {
        return $query->where('status', 1);
    }
}
