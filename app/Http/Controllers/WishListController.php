<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishListController extends Controller
{
    
    // public function index(Request $request)
    // {
    //     $allProducts = Product::all();
    //     return response()->json(
    //         [
    //             'valid' => true,
    //             'message' => 'retrieved successfully',
    //             'products' => $allProducts,
    //         ],
    //         200,
    //     );
    // }

    // public function store(Request $request)
    // {
    //     // "images": {
    //     //     "links" => [
    //     //         "url1",
    //     //         "url2",
    //     //         "url3"
    //     //     ]
    //     // }
    //     $validator = Validator::make($request->all(), [
    //         'name' => ['required', 'string'],
    //         'price' => ['required', 'numeric', 'gt:0'],
    //         'images' => ['required', 'array'],
    //         'images.links' => ['required', 'array'],
    //         'images.links.*' => ['required', 'string'],
    //         'category_id' => ['required', 'exists:categories,id'],
    //     ]);
    //     if ($validator->fails()) {
    //         return response()->json(
    //             [
    //                 'valid' => false,
    //                 'message' => 'something went wrong',
    //                 'errors' => $validator->errors()
    //             ],
    //             400,
    //         );
    //     }
 
    //     $newProduct = Product::create($request->all());
    //     return response()->json(
    //         [
    //             'valid' => true,
    //             'message' => 'created successfully',
    //             'product' => $newProduct,
    //         ],
    //         200,
    //     );
    // }
    // public function destroy(Product $product)
    // {
    //     $product->delete();
    //     return response()->json(
    //         [
    //             'valid' => true,
    //             'message' => 'deleted successfully',
    //             'product' => $product,
    //         ],
    //         200,
    //     );
    // }
}
