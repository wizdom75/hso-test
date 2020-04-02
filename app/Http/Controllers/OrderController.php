<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    // Index method
    public function index()
    {
        return Order::paginate(env('PAGE_SIZE'));
    }

    // Store method
    public function store(Request $request)
    {
        $order = Order::create($request->all());
        return response()->json($order);
    }

    // Show method
    public function show(Order $order)
    {
        return $order;
    }

    // Update method
    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return response()->json($order);
    }

    // Destroy method
    public function destroy(Order $order)
    {
        $order->delete();
        return response()->json(null, 204);
    }

    //Account Orders method
    public function orders($account_id)
    {
        $orders = Order::where('account_id', $account_id)->paginate(env('PAGE_SIZE'));
        return response()->json($orders);
    }
}
