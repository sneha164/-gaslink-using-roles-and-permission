<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    
    protected $fillable = [
        'name', 'category_id', 'image', 'price', 'quantity'
    ];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class);
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
    
}
