<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Add new item here:</h2>
    <a href="{{url('/laptop')}}">Back</a>
    <br><br>
    <form action="{{ route('laptop.store') }}" method='POST'>
        @csrf

        <div>
            <label for="brand">Brand Name</label>
            <input type="text" name="brand" id="brand" placeHolder="Brand Name here...">
            @error('brand')
                <div>{{ $message }}</div>
         
            @enderror
        </div>
    
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeHolder="Price Name here...">
            @error('price')
            
                <div>{{ $message }}</div>
         
            @enderror
        </div>

        <br><br>
        <div>
            <button type="reset">Reset</button>
            <button type="submit">Submit</button>
        </div>        
    </form>


</body>
</html>