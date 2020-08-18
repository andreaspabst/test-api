<?php

namespace App;

use Webpatser\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * Description of user
     *
     * @return void
     */
    public function user() {
        return $this->belongsTo(User::class);
    }

    /**
     * Description of comments
     *
     * @return void
     */
    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
