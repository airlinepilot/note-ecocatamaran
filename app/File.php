<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = [
            'name',
            'note_id',
    ];

    public function note()
    {
        return $this->belongsTo('App\Note');
    }
}
