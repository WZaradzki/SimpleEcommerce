<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Http\Requests\public\Order\StoreOrderRequest;
use App\Http\Resources\admin\OrderResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOrderRequest $request)
    {
        $product = Product::find($request->product_id);

        $user = User::where('email', $request->email)->first();

        if (!$user) {

            $user = User::create([
                'email' => $request->email,
            ]);
        }

        $order = Order::create([
            'user_id' => $user->id,
            'value' => $product->price,
            'status' => 'open',
        ]);

        return new OrderResource($order);
    }
}
