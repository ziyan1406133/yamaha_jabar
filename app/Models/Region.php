<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Network;

class Region extends Model
{
    use HasFactory;
    public function networks()
    {
        return $this->hasMany(Network::class, 'region_id');
    }
}
