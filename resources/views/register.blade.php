@extends('layouts.main')
@section('main-section')
<head>
    @push('title')
    <title>Register</title>    
    @endpush
 
</head>
    daksh shah
    <form action="/register" method="POST">
        @csrf
        <label> First Name </label>
        <input type="text" value="{{ old('name') }}" name="name"><br><br><br>
        @error('name')
            {{$message}}<br><br><br>
        @enderror
        <label> EMAIL </label>
        <input type="text"  value="{{ old('email') }}" name="email"><br><br><br>
        @error('email')
        {{$message}}<br><br><br>
    @enderror
        <label> Password </label>
        <input type="password"  value="{{ old('password') }}" name="password"><br><br><br>
        @error('password')
        {{$message}}<br><br><br>
    @enderror
        <label>Retype Password </label>
        <input type="password"  value="{{ old('confirm_password') }}" name="confirm_password"><br><br><br>
        @error('confirm_password')
        {{$message}}<br><br><br>
    @enderror
        <input type="submit">
        </form> 
@endsection