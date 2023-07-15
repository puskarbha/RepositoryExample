<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $employees= Employee::all();
        return view('welcome',compact('employees'));
    }

    public function  updateEmployee($id){
        return view('updateEmployee',compact('id'));
}

public function deleteEmployee($id){
        $employee=Employee::findorfail($id);
        $employee->delete();
        return redirect('/');

}
}
