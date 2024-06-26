<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = false;
    use HasFactory;

    public function getImageUrlAttribute()
    {
        return url('storage/' . $this->image);
    }
}
