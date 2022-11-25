
<head>
    @push('title')
    <title>About Us</title>    
    @endpush
 
</head>

@extends('layouts.main')
@section('main-section')
            <h1>DAKSH </h1>
            {{$fullname}}
            {!!$collage!!}
        
          @foreach($students as  $student)
               {{$student}}
           
            
           @endforeach
          
           @if($fullname== "daksh shah")
                    <br><br>Here i AM Daksh 
            @endif


    Daksh shah
@endsection

