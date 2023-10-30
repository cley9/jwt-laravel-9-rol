<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="container" >
        <form action="{{ route("login.user") }}" method="POST">
            @csrf
            @method('post')
            <input type="text" name="email">
            <input type="text" name="password">
            <button type="submit"> registro</button>
        </form>
        {{-- <div class="form" action="{{ route("login.user") }}" metodo="POST">
            
        </div> --}}
    </div>
    
</body>
</html>