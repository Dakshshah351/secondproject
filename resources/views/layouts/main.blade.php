<!DOCTYPE html>
<html>
    <head>
        @stack('title')
        {{-- <title> main file </title> --}}
    </head>
    <body>
           
            
        <h1>Header</h1>
@yield('main-section')
        <h1>Footer</h1>
    </body>
</html>
