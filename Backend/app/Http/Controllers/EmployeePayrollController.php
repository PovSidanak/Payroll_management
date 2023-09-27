<?php

namespace App\Http\Controllers;

use App\Models\EmployeePayroll;
use Illuminate\Http\Request;
use App\Models\EmployeePayrollCourse;


class EmployeePayrollController extends Controller
{
    //

    public function register_emppayroll(Request $req){
        $employee_id = $req -> employee_id;
        $total_hour = $req -> total_hour;
        $project_inc = $req -> project_inc;
        $payroll_date = $req -> payroll_date;
        $total_monthly_payroll=$req -> total_monthly_payroll;


        #createmodelsavedatabase
        $new_emppayroll = new EmployeePayroll([
            'employee_id' => $employee_id,
            'total_hour' => $total_hour,
            'project_inc' => $project_inc,
            'payroll_date' => $payroll_date,
            'total_monthly_payroll' => $total_monthly_payroll

        ]);

        $new_emppayroll -> save();
        return response()->json($new_emppayroll);
        dd($new_emppayroll);

    }
     public function get_emppayroll (Request $req){
        $emppayroll = EmployeePayroll::all();
        return response() -> json(['new_employee_payroll' => $emppayroll], 200);
        dd($emppayroll);
     }

}
