<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title}}</title>
</head>
<body>
    @if (session('message'))
        <div class="alert alert-success mex fs-3">
            {{ session('message') }}
        </div>
    @endif

    {{-- @auth
        <form method="POST" action="{{route('logout')}}">
            @csrf
            <button class="btn btn-primary btn-fixed">Logout</button>
        </form>
    @endauth --}}
    {{$slot}}
</body>
</html>