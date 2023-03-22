<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
 public function category(){
    return $this->belongsTo(ProductCategory::class);
 }
    /**
     * The attributes that are mass assignable.
     *  
     * @var array
     */
    protected $fillable = [
        'name', 'category_id', 'image', 'price', 'quantity'
    ];
    protected $with = [ 'category'];

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) =>
                $query
                    ->where('name', 'like', '%' . $search . '%')
                    ->orWhere('price', '%' . $search . '%')
            )
        );

        $query->when(
            $filters['category'] ?? false,
            fn ($query, $category) =>

            $query

                ->whereHas(
                    'category',
                    fn ($query) =>
                    $query->where('title', $category)
                )
        );

        // $query->when($filters['author'] ?? false, fn($query, $author) =>

        //     $query->whereHas('author', fn($query) =>
        //         $query->where('username', $author)
        //     )  
        // );
    
    }
}
