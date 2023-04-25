<?php

namespace App\Http\Controllers;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class WishListController extends Controller
{
    
    public function index(Request $request)
    {
        $allWishlist = Wishlist::all();
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'wishlists' => $allWishlist,
            ],
            200,
        );
    }

    public function store(Request $request)
    {
    
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', 'exists:users,id'],
            'product_id' =>['required', 'exists:products,id'],
            
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    'valid' => false,
                    'message' => 'something went wrong',
                    'errors' => $validator->errors()
                ],
                400,
            );
        }
 
        $newWishlist = Wishlist::create($request->all());
        return response()->json(
            [
                'valid' => true,
                'message' => 'created successfully',
                'wishlist' => $newWishlist,
            ],
            200,
        );
    }
    public function destroy(Wishlist $wishlist)
    {
        $wishlist->delete();
        return response()->json(
            [
                'valid' => true,
                'message' => 'deleted successfully',
                'wishlist' => $wishlist,
            ],
            200,
        );
    }
}
