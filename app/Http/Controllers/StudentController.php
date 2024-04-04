<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
        // 'auth:students'ミドルウェアをこのコントローラの全アクションに適用します。
        $this->middleware('auth:students');
    }

    // 生徒用ダッシュボード表示アクション
    public function index()
    {
        return view('student.dashboard');
    }
}
