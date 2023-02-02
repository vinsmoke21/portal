<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        return 'test';
    }

    public function store(Request $request){
        $students = new Student();
        $students->fname = $request->input('fname');
        $students->lname = $request->input('lname');
        $students->email = $request->input('email');
        $students->password = $request->input('password');

        $students->save();
        return response()->json($students);
    }
}
