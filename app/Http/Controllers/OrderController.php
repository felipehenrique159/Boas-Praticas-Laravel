<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function index()
    {

        $orders = Order::all();

        // dd($Orders);

        return view('dashboard.orders', ['orders' => $orders] );
    }
}
