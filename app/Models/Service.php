<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'category_id', 'details', 'latitude', 'longitude'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
