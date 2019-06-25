<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class souvenir extends Model
{
    protected $fillable = [
        'name', 'description', 'price', 'imagePath', 'supplier_id', 'category_id',
    ];
    public function supplier(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\supplier', 'supplier_id','id');
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo('App\category', 'category_id','id');
    }
}
