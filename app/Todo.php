<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'is_done' => 'boolean',
    ];

    /**
     * Description of user
     *
     * @return void
     */
    public function user() {
        return $this->belongsTo(User::class);
    }
}
