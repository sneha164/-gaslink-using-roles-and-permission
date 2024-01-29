<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('permission:productcategory-list|productcategory-create|productcategory-edit|productcategory-delete', ['only' => ['index', 'show']]);
        $this->middleware('permission:productcategory-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:productcategory-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:productcategory-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product_categories = ProductCategory::latest()->paginate(8);
        return view('productcategory.index', compact('product_categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $product_categories = ProductCategory::all();
        return view('productcategory.create', compact('product_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        ProductCategory::create($request->all());

        return redirect()->route('productcategory.index')
            ->with('success', 'Product category created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productcategory $product
     * @return \Illuminate\Http\Response
     */
    public function show(ProductCategory $productcategory)
    {
        return view('productcategory.show', compact('productcategory'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductCategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductCategory $productcategory)
    {
        $productcategory = ProductCategory::find($productcategory->id);

        return view('productcategory.edit', compact('productcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductCategory  $productcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductCategory $productcategory)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $productcategory->update($request->all());

        return redirect()->route('productcategory.index')
            ->with('success', 'Product category updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productcategory $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductCategory $productcategory)
    {
        $productcategory->delete();

        return redirect()->route('productcategory.index')
            ->with('success', 'Product category deleted successfully');
    }
}
