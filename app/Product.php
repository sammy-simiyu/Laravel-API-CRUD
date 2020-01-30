<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = ['supplier_id','type','pricePerkilo','quantityInstock'];

    public function suppliers()
    {
      return $this->belongsTo(\App\Supplier::class);
    }
}
