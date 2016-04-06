<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eintrag extends Model
{
    protected $fillable = ['name'];

    public function user()
        {
            return $this->belongsTo(User::class);
        }
}
