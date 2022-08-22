<?php 

namespace App\Http\Controllers;
use App\Models\Product;

class ProductController extends Controller {
    /**
     * get all products function.
     */
    public function index() {
        $products = Product::all();
        return response()->json($products);
    }
    /**
     * get a product by id function.
     */
    public function show($id) {
        $product = Product::find($id);
        return response()->json($prodcut);
    }
    
}