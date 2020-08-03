<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <head>
            <link rel="stylesheet" href="{{asset('css/app.css')}}">
        </head>
        <title>{{config('app.name','Dojo')}}</title>
    </head>
    
    <body>
       
        
    <div class="container">
            @include('inc.nav')
            @include('inc.messages')
            @yield('content')
    </div>
        
      
    </body>

</html>