<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use GuzzLeHttp\Client;

class UserController extends Controller
{
    //
   
    public function payroll(){
        return view('payroll');
    }
    public function LecturerPayment(){
        return view('LecturerPayment');
    }
    public function PaymentHomepage(){
        return view('PaymentHomepage');
    }
    public function History_payroll(){
        return view('History_payroll');
    }


}
