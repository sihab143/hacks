<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\ExamCreate;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function examCreate(Request $request)
    {
        ExamCreate::addExam($request);
        return redirect('/')->with('message', 'Exam create successfully');
    }
}
