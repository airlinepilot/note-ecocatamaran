<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    protected $fillable = [
            'name',
            'content',
            'status',
            'link',
    ];
    public function files()
    {
        return $this->hasMany('App\File');
    }
}
