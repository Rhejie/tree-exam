<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{

    public function index() {

        $employees = Employee::tree();

        return view('welcome', compact('employees'));

    }
}
