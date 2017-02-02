<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price', 'description'];

    public function labels()
    {
        return $this->belongsToMany(Label::class);
    }

    public function reviews()
    {
        return $this->belongsTo(Review::class);
    }
}
