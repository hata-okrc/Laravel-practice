<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable =[
        "title",
        "body"
    ];

    public function user() {
        $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function files() {
        return $this->hasMany(File::class);
    }
}
