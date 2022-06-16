<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentsController extends Controller
{
    public function getMostPayingngCustomer()
    {
        // $customerNumber = Payment::all()->groupBy('customerNumber');
        $customerNumber = DB::select('SELECT customerNumber, MAX(amount) as "AmountPaid" FROM payments GROUP BY customerNumber ORDER BY 2 DESC;')[0];
        return $customerNumber;
    }
}

// SELECT customer_id, COUNT(DISTINCT ord_no),
// MAX(purch_amt)
// FROM orders
// GROUP BY customer_id
// ORDER BY 2 DESC;
