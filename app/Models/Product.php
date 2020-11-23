<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;
use App\Models\Color;

class Product extends Model
{
    use HasFactory;
    public function features()
    {
        return $this->hasMany(Feature::class, 'product_id');
    }
    public function colors()
    {
        return $this->hasMany(Color::class, 'product_id');
    }
}
