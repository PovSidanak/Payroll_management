<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;

class EmployeeController extends Controller
{
    //
    public function register_emp(Request $req){
        $name = $req -> name;
        $gender =$req -> gender;
        $email = $req -> email;
        $phone = $req -> phone;
        $position_id = $req -> position_id;
        $academic_year_id = $req -> academic_year_id;
        $degree_id = $req -> degree_id;
        $department_id = $req -> department_id;
        $course_id = $req -> course_id;
        $main_salary_id = $req -> main_salary_id;
        $hour_salary_id = $req -> hour_salary_id;


        #createmodelsavedatabase
        $new_emp = new Employees([
            'name'=> $name,
            'gender'=> $gender,
            'email' => $email,
            'phone' => $phone,
            'position_id' => $position_id,
            'academic_year_id' => $academic_year_id,
            'degree_id'=> $degree_id,
            'department_id'=> $department_id,
            'course_id' => $course_id,
            'main_salary_id' => $main_salary_id,
            'hour_salary_id' => $hour_salary_id
        ]);

        $new_emp -> save();
        return response()->json($new_emp);
        dd($new_emp);
        
    }
     public function get_emp (Request $req){
        $emp = Employees::all();
        return response() -> json(['new_employee' => $emp], 200);
        dd($emp);
     }
}
