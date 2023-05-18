<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'title',
        'description',
         // Add this line to allow mass assignment on the _token field
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
