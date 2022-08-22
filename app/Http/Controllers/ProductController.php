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
    /**
     * create new product.
     */
    public function create(Request $request) {
        $product = new Product();

        $product->name      = $request->name;
        $product->price     = $request->price;
        $product->category  = $request->category;

        $product->save();

        return response()->json("Product Successfully Created!");
    }
    /**
     * update new product.
     */
    public function update(Request $request, $id) {
        $product = Product::find($id);

        $product->name      = $request->name;
        $product->price     = $request->price;
        $product->category  = $request->category;

        $product->save();

        return response()->json($product);
    }
    /**
     * delete a product.
     */
    public function delete($id) {
        $product = Product::find($id);
        $product->delete();

        return response()->json('Product successfully deleted!');
    }
}