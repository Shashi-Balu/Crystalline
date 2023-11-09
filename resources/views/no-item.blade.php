@extends('layouts.app')

@section('content')
<div class="text-center">
    <h3>{{ $message }}</h3>
    <a href="/login" class="login-button" style="margin-top: 3rem;">Login</a>
    <a href="/register" class="register-button" style="margin-top: 3rem;">Register</a>
</div>
@endsection