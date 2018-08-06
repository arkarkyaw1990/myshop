<?php

namespace App\Http\Controllers;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Resources\Product\ProductResource;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
class ProductController extends Controller
{
    public function index(Request $request) 
    {
        $perPage = 12;
        $cat = $request->cat;
       
        if($request->pp) {
            $perPage = (int)$request->pp;
        }
        $category = Category::where('name',$cat)->first(); 
        $products = ProductCollection::collection($category->products()->paginate($perPage));
        return $products;

    }
    public function show(Product $product)
    {
    	return new ProductResource($product);
    }
}
