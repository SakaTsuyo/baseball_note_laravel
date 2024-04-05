@extends('layouts.app')

@section('title', 'Teacher login')

@section('content')
<h2>Teacher Login</h2>
    <form method="POST" action="{{ route('teacher.login') }}">
        @csrf
        <div>
            <label for="name">名前:</label>
            <input type="name" name="name" id="name" required>
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
        <button type="submit">Login</button>
    </form>
@endsection