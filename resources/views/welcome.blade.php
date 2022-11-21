@extends('layouts.main')
@section('main-section')
  <title>dakshwreg </title>


 <?php  
    Route::get('about.blade.php?fname=daksh&lname=shah', function () {
  // $fullname=$fname." ".$lname;
   //echo "daksh";
   // $collage= "<h1> DAKSH'S PROJECT</h1>";
   /// $students = ['daksh', 'divy', 'kleval', 'hetvi'];
    return view('about');
    });
    ?>
@endsection
{{--  

<head>
    <title> Daksh </title>
</head>--}}