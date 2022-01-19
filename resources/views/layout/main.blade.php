<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!--google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> 
    
    <!-- Style -->
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">

</head> 
<body>
    <!-- include header -->
    @include('header')
    
    <!-- dinamic parts -->
    @yield('main')
    
    <!--include footer-->
    @include('footer')





</body>
</html>