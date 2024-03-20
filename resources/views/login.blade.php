@extends('master')


@section('content')
    <div class="container">
        <form action="login" method="POST">
            @csrf
            <h2>User Registration</h2>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
        </form>
    </div>
@endsection
