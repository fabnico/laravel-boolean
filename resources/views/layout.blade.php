<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>@yield('title')</title>
      <style>
         li{
            display: inline-block;
            margin-right: 30px;
         }
      </style>
   </head>
   <body>
      <header>
         <ul>
            @foreach(config('main.routes') as $route)
            <li>
               <a href="{{ route($route['pathId']) }}">{{ $route['displayText'] }}</a>
            </li>
            @endforeach
         </ul>
      </header>
      <main>
         <p>
            @yield('content')
         </p>
      </main>
   </body>
</html>
