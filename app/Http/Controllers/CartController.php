<?php

namespace App\Http\Controllers;

use App\Cart\Cart;
use App\Models\Product;

class CartController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function index()
     {
        return view('pages.cart', ['cart' => $this->loadCartFromSession()]);
     }

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function getCart()
    {
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'cart' => $this->loadCartFromSession(),
            ],
            200,
        ); 
    }

    public function addToCart(Product $product)
    {
        $cart = $this->loadCartFromSession();
        $cart->addProduct($product);
        $this->saveCartToSession($cart);
 
        return response()->json(
            [
                'valid' => true,
                'message' => 'product added succesfully',
                'cart' => $cart,
            ],
            200,
        ); 
    }

    public function removeFromCart(Product $product)
    {
        $cart = $this->loadCartFromSession();
        $cart->removeProduct($product);
        $this->saveCartToSession($cart);

        return response()->json(
            [
                'valid' => true,
                'message' => 'product removed successfully',
                'cart' => $cart,
            ],
            200,
        ); 
    }

    protected function loadCartFromSession() : Cart
    {
        $cart = session('user_cart');
        // check if no cart was found in the session, we will need to create a new cart
        if (empty($cart)) {
            $cart = new Cart();
        }

        return $cart;
    }

    protected function saveCartToSession(Cart $cart)
    {
        session([
            'user_cart' => $cart
        ]);
    }
}
