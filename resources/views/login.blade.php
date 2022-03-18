@extends('master')

@section('title','Login')

@section('content')

<p>This is login page</p>

<form action="{{ url('login.php') }}" method='POST'>
{{ csrf_field()}}
Username: <input type='text' name='username' required/> 
Password: <input type='password' name='password' required/>
<input type='submit' class="button" name="login" value='Login'/> 
<form>

@endsection