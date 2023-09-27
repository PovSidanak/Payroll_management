<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeePayroll extends Model
{
    use HasFactory;
    protected $table = "employee_payroll";

    protected $fillable = [
        'employee_id',
        'total_hour',
        'project_inc',
        'payroll_date',
        'total_monthly_payroll'
    ];
}
