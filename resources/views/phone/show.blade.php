<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('/phone') }}">Back</a>

    <h2>{{$name}} : {{$post->id}}</h2>
    <hr>
    
    <i><h3>Brand Name :</h3></i>
    <p>{{ $post->brand }}</p>

    <i><h3>Price :</h3></i>
    <p>{{ $post->price }}</p>

    <br><br><br>

    <form action="{{route('phone.destroy', $post->id)}}" method="POST">
        @csrf
        @method('destroy')

    
        <button type="submit">Delete</button>
        
    </form>

</body>
</html>