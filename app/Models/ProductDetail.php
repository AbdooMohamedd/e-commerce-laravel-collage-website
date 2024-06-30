<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;

    protected $table = 'products'; // Specify the table name

    protected $fillable = ['name', 'description', 'price', 'category_id', 'image_url'];

    // Define relationship with category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}  