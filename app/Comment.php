<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
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
     * Description of post
     *
     * @return void
     */
    public function post() {
        return $this->belongsTo(Post::class);
    }
}
