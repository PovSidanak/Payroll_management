<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Employees;
use Illuminate\Support\Facades\DB;

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
        $emp = DB::table('employee') ->
        join('position', 'employee.position_id', '=', 'position.id')->
        join('department','employee.department_id', '=', 'department.id')->
        select('employee.*','position.type','position.status','department.name as department_name')->

        get();


        return response() -> json(['new_employee' => $emp], 200);
        dd($emp);
     }

    //  public function get_by_name (Request $req){

    //     $emp = Employees::where('name', 'like', "%".$req -> name."%") -> get();
    //     return response() -> json(['new_employee' => $emp], 200);
    // }

    //  public function update_emp (Request $req){

    //     $new_name = $req -> new_name;
    //     $emps_id = $req -> employee_id;
    //     $new_gender = $req -> new_gender;
    //     $new_email = $req -> new_email;
    //     $new_phone = $req -> new_phone;
    //     $new_position_id = $req -> new_positon_id;
    //     $new_department_id = $req -> new_department_id;
    //     $new_degree_id = $req -> new_degree_id;
    //     $new_course_id = $req -> new_course_id;
    //     $new_academic_year_id = $req -> new_academic_year_id;

    //     $update_query = Employees::where('id', $emps_id)
    //         -> update([
    //             'name' => $new_name,
    //             'gender' => $new_gender,
    //             'email' => $new_email,
    //             'phone' => $new_phone,
    //             'position_id' => $new_position_id,
    //             'department_id' => $new_department_id,
    //             'degree_id' => $new_degree_id,
    //             'course_id' => $new_course_id,
    //             'academic_year_id' => $new_academic_year_id

    //         ]);
    //     if ($update_query == 0){
    //         return response() -> json(['message' => 'Employee not found'], 200);
    //     }
    //     return response() -> json(['message' => $req -> all()], 200);
    //     //dd('hi');
    // }

    // public function delete_emp(Request $req){
    //     $emps_id = $req -> employee_id;
    //    // dd($client_id);

    //    $delete_query = Employees::where('id', $emps_id)->delete();
    //    if ($delete_query == 0){
    //     return response() -> json(['message' => 'Employee not found'], 200);
    //     }
    //    return response() -> json(['message' => 'Delete successful']);

    //    //return response() -> json(['message' => $req -> all()], 200);
    // }


}
