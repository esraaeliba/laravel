<?php

namespace App\Http\Controllers;

use App\Wishlist\Wishlist;
use App\Models\Product;

class WishListController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function index()
     {
        return view('pages.wishlist', ['wishlist' => $this->loadWishFromSession()]);
     }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getWish()
    {
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'wishlist' => $this->loadWishFromSession(),
            ],
            200,
        ); 
    }

    public function addToWish(Product $product)
    {
        $wishlist = $this->loadWishFromSession();
        $wishlist->addProduct($product);
        $this->saveWishToSession($wishlist);
 
        return response()->json(
            [
                'valid' => true,
                'message' => 'product added succesfully',
                'wishlist' => $wishlist,
            ],
            200,
        ); 
    }

    public function removeFromWish(Product $product)
    {
        $wishlist = $this->loadWishFromSession();
        $wishlist->removeProduct($product);
        $this->saveWishToSession($wishlist);

        return response()->json(
            [
                'valid' => true,
                'message' => 'product removed successfully',
                'wishlist' => $wishlist,
            ],
            200,
        ); 
    }

    protected function loadWishFromSession() : Wishlist
    {
        $wishlist = session('user_wish');
        // check if no Wish was found in the session, we will need to create a new Wish
        if (empty($wishlist)) {
            $wishlist = new Wishlist();
        }

        return $wishlist;
    }

    protected function saveWishToSession(Wishlist $wishlist)
    {
        session([
            'user_wish' => $wishlist
        ]);
    }
}
