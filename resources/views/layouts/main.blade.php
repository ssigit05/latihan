<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('bs/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('fa/css/all.css')}}">
</head>
<body>
    <div class="container">
        <h1 class="my-5">
            <i class="fas fa-users"></i>Admin
        </h1>
        @yield('content')
    </div>
</body>
</html>