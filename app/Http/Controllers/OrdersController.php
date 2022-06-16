<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function getMostBuyingCustomer()
    {
        $customerNumber = Order::all()->groupBy('customerNumber')->max()->first()->customerNumber;
        return $customerNumber;
    }


}
