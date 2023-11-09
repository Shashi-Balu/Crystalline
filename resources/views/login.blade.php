@extends("layouts.app")
@section('content')

<div class="custom-login">
    <h2 class="title">Login</h2>
    <form action="login" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" name="email" placeholder="Enter email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" name="password" id="exampleInputPassword1" placeholder="Password">
        </div>
        <button type="submit" class="register-button">Login</button>
    </form>

</div>
@endsection