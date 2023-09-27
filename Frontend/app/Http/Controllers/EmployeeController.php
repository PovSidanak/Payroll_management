<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class EmployeeController extends Controller
{
    //


    public function homepage(){
        $http = new \GuzzleHttp\Client();

       //$response = $http -> get('http://192.168.1.205:8080/api/employee_route/get_emps');

        // $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_emps');

        // if($response -> getStatusCode() != 200){
        //     return view('homepage');


        // }
        // $result = json_decode((string)$response -> getBody(), true);
       // dd($result["new_employee"]);
       return view('homepage');


    }
    public function LecturerPayment(){
        $http = new \GuzzleHttp\Client();

        $response = $http -> get('http://127.0.0.1:8000/api/employee_route/get_emps');

        if($response -> getStatusCode() !=200){
            return view('LecturerPayment');
        }
        $result = json_decode((string)$response -> getBody(), true);

        return view('LecturerPayment', ['employees'=> $result['new_employee']]);

    }

    public function create_employee(Request $req){
         $name = $req -> emp_name;
         $gender = $req -> emp_gender;
         $email = $req -> emp_email;
         $phone= $req -> emp_phone;
         $position = $req -> emp_position;
         $dept_id = $req -> dept_id;
         $degree_id = $req -> degree_id;

         $http = new \GuzzleHttp\Client();
         $body = [
            'name' => $name,
            'gender' => $gender,
            'email' => $email,
            'phone' => $phone,
            'position' => $position,
            'dept_id' => $dept_id,
            'degree_id' => $degree_id,
         ];
        // $response = $http->post('http://192.168.1.205:8000/api/employee_route/create_emp', ['form_params'=> $body]);
        // $result = json_decode((string)$response -> getBody(), true);
        // dd($result);
        // return back();

       // get all output from input
       //dd($body);

        // $body = [
        //     'name' =>'GG',
        //     'gender' => 'Male',
        //     'email' => 'gg@gmail.com',
        //     'phone' => '090909090',
        //     'position' => 'Teacher',
        //     'dept_id' => '2',
        //     'degree_id' => '3',
        //  ];

           $response = $http->post('http://127.0.0.1:8000/api/employee_route/create_emp', ['form_params'=> $body]);
           //$response = $http->post('http://192.168.1:8080/api/employee_route/get_emps', ['form_params'=> $body]);

           if ( $response  -> getStatusCode() !=200){
             return back();
           }
           return back();
    }

    public function create_employeepayroll(Request $req){
        $employee_id= $req -> employee_id;
        $course_id = $req -> course_id;
        $salary_id = $req -> salary_id;
        $hour_salary_id = $req -> hour_salary_id;

        $http = new \GuzzleHttp\Client();

        $body = [
            'employee_id' => $employee_id,
            'course_id' => $course_id,
            'salary_id' => $salary_id,
            'hour_salary_id' => $hour_salary_id

         ];

         $response = $http->post('http://127.0.0.1:8000/api/empPayroll_route/create_empPayroll', ['form_params'=> $body]);






    }


}
