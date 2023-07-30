<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{url('/laptop')}}">Back</a>
    <br><br>

    <form action="{{route('laptop.update', $post->id)}}" method='POST'>
        @csrf
        @method('PUT')

        <h2>Update your item here</h2>
        <hr>
        <br><br>

        <div>
            <label for="brand">Brand Name</label>
            <input type="text" name="brand" id="brand" placeHolder="Brand Name here..." value="{{$post->brand}}">
        </div>
    
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeHolder="Price..." value="{{$post->price}}">
        </div>
        
        <br><br>
    
        <div>
            <button type="submit">Update</button>
        </div>
        
    </form>
</body>
</html>