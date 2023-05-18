<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Product $product, Request $request)
    {
        $rating = new Rating();
        $rating->user_id = auth()->user()->id;
        $rating->product_id = $product->id;
        $rating->rating = $request->input('rating');
        $rating->save();

        return back()->with('success', 'Rating submitted successfully.');
    }
}
