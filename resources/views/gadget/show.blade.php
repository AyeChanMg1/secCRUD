<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ url('/gadget') }}">Back</a>

    <h2>{{$name}} : {{$post->id}}</h2>
    <hr>
    
    <i><h3>Gadget Type :</h3></i>
    <p>{{ $post->gadgetType }}</p>

    <i><h3>Price :</h3></i>
    <p>{{ $post->price }}</p>

    <br><br><br>

    <form action="{{route('gadget.destroy', $post->id)}}" method="POST">
        @csrf
        @method('DELETE')

    
        <button type="submit">Delete</button>
        
    </form>

</body>
</html>