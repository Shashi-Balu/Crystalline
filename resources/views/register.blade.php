@extends("layouts.app")
@section('content')

<div class="custom-login">
    <h2 class="title">Register</h2>
    <form action="/register" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Enter User Name">
        </div>
        <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password">
        </div>
        <button type="submit" class="register-button">Register</button>
    </form>

</div>
@endsection