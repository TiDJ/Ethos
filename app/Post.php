<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // hasMany : Relations AvoirBeaucoup
    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'ASC');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
