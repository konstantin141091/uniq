@extends('layouts.app_login')

@section('content')
    <div class="container">
        <h1>Админ панель сайта</h1>
        <ul>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button type="submit">выйти</button>
            </form>
        </ul>
    </div>
@endsection
