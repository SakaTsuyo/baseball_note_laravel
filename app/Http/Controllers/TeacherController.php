<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function __construct()
    {
        // 'auth:teachers'ミドルウェアをこのコントローラの全アクションに適用します。
        $this->middleware('auth:teachers');
    }

    // 教師用ダッシュボード表示アクション
    public function index()
    {
        return view('teacher.dashboard');
    }
}
