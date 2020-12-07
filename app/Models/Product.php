<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Feature;
use App\Models\Color;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    public function features()
    {
        return $this->hasMany(Feature::class, 'product_id');
    }
    public function colors()
    {
        return $this->hasMany(Color::class, 'product_id');
    }
}
