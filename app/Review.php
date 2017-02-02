<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = ['reviewer', 'title', 'content', 'review_date', 'product_id'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
