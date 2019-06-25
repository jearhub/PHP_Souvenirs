<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function souvenirs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\souvenir');
    }
}
