<?php

namespace App\Http\Controllers;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index() 
    {
    	$products = ProductCollection::collection(Product::paginate(20));
    	return $products;
    }
    public function show(Product $product)
    {
    	return new ProductResource($product);
    }
}
