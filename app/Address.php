<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['address_detail', 'city', 'state', 'country', 'zip_code'];

    public function seller()
    {
        return $this->belongsTo(Seller::class);
    }
}
