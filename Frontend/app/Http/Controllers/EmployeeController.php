<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmployeeController extends Controller
{
    //

    public function homepage(){
        $http = new \GuzzleHttp\Client();


        // $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_emps');

        // if($response -> getStatusCode() != 200){
        //     return view('homepage');


        // }
        // $result = json_decode((string)$response -> getBody(), true);
       // dd($result["new_employee"]);
       return view('homepage');


    }



    public function employee_page(){

        $http = new \GuzzleHttp\Client();

        $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_employee');
        $result = json_decode((string)$response -> getBody(), true)['new_employee'];
        // dd($result);
        return view('Employee', ['employees' => $result]);
    }


}
