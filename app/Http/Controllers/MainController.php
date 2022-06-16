<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function index(Request $request){
        //1st
        $mvpController = new MVPController();
        $employee = $mvpController->getMVP();
        //2nd
        $orderController = new OrdersController();
        $largestOrdersCustomer = $orderController->getMostBuyingCustomer();
        //3rd
        $paymentController = new PaymentsController();
        $mostPayingCustomer = $paymentController->getMostPayingngCustomer();
        //4th
        $teamsController = new TeamsController();
        $teamsRanking = $teamsController->teams();
        return view('index',['employee'=>$employee,'largestOrdersCustomer'=>$largestOrdersCustomer,'mostPayingCustomer'=>$mostPayingCustomer,'teams'=>$teamsRanking]);
    }
}
