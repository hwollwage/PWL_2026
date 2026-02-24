<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>this is home page / root page of POS web</h1>
    <h2>sales going well sir</h2>
    <img src="tel_aviv_impressed.jpg" width="200">
    <img src="jarvis_is_this_tuff.jpg" width="200" alt="">
    <h2>checkout other things</h2>
    
    <h2>
        <a href="{{ route('home') }}">HOME</a>
    <a href="{{ route('user', ['id' => 1, 'name' => 'Hanzel']) }}">USER</a>
    <a href="{{ route('sales', ['name' => 'Hanzel']) }}">SALES</a>
    </h2>
    <h2>check categories procduct</h2>
    <h2>
        <a href="{{ route('food') }}">FOOD & BEV</a><br>
        <a href="{{ route('beauty') }}">BEAUTY & HEALTH </a><br>
        <a href="{{ route('homecare') }}">HOME CARE</a><br>
        <a href="{{ route('baby') }}">BABY KID</a><br>
    </h2>
    
    
</body>
</html>