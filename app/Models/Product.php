<?php

namespace App\Models;

use App\Models\Product as ModelsProduct;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function sub_products()
    {
        return $this->hasMany(ModelsProduct::class, 'parent_id', 'id');
    }
}
