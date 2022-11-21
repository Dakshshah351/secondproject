@extends('layouts.main')
@section('main-section')
    daksh shah
    <form action="/userinfo" method="POST">
        @csrf
        <label> First Name </label>
        <input type="text"name="name"><br><br><br>
        @error('name')
            {{$message}}<br><br><br>
        @enderror
        <label> EMAIL </label>
        <input type="text" name="email"><br><br><br>
        @error('email')
        {{$message}}<br><br><br>
    @enderror
        <label> Password </label>
        <input type="password" name="password"><br><br><br>
        <label>Retype Password </label>
        <input type="password" name="confirm_password"><br><br><br>
        <input type="submit">
        </form> 
@endsection