<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adv extends Model
{
    protected $fillable = [
    'title',
    'desc',
    'uid'
    ];
    public function username()
    {
        return $this->hasOne('App\User', 'id', 'uid');
    }
}
