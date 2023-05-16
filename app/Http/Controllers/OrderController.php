<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $allOrders = Order::all();
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'orders' => $allOrders,
            ],
            200,
        );
    }

    public function store(Request $request)
    {
        $cart = session('user_cart');
        if (!$cart || !$cart->hasProducts()) {
            return response()->json(
                [
                    'valid' => false,
                    'message' => 'there is no products in your cart yet.',
                    'errors' => null,
                ],
                400,
            );
        }
 
        $newOrder = Order::create(['user_id' => auth()->user()->id]);
        $newOrder->products()->attach($request->product_ids);
        return response()->json(
            [
                'valid' => true,
                'message' => 'created successfully',
                'orders' => $newOrder,
            ],
            200,
        );
    }

    public function show(Order $order)
    {
        return response()->json(
            [
                'valid' => true,
                'message' => 'retrieved successfully',
                'orders' => $order,
            ],
            200,
        );    
    }

    public function update(Request $request, Order $order)
    {
        $validator = Validator::make($request->all(), [

            'user_id' => ['required', 'exists:users,id'],
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
 
        $newOrder = Order::create($request->all());
        return response()->json(
            [
                'valid' => true,
                'message' => 'updated successfully',
                'orders' => $newOrder,
            ],
            200,
        );
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(
            [
                'valid' => true,
                'message' => 'deleted successfully',
                'orders' => $order,
            ],
            200,
        );

    }
}
