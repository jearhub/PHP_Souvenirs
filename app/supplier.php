<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    protected $fillable = [
        'name', 'phone_number', 'email',];

    public function souvenirs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany('App\souvenir');
    }
}
?>