@extends('layouts.app')

@section('title', 'Student Registration')

@section('content')
<h2>Student Registration</h2>
    <form method="POST" action="{{ route('student.register') }}">
        @csrf
        <div>
            <label for="name">名前:</label>
            <input type="text" name="name" id="name" required>
        </div>
        <div>
            <label for="team">学校名:</label>
            <input type="team" name="team" id="team" required>
        </div>
        <div>
            <label for="email">メールアドレス:</label>
            <input type="email" name="email" id="email" required>
        </div>
        <div>
            <label for="password">パスワード:</label>
            <input type="password" name="password" id="password" required>
        </div>
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>
        <button type="submit">Register</button>
    </form>
@endsection