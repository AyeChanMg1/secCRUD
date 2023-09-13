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
    <a href="{{route('gadget.index')}}">Back</a>
    <br><br>
    <form action="{{ route('gadget.store') }}" method='POST'>
        @csrf

        <div>
            <label for="gadgetType">Gadget Type</label>
            <input type="text" name="gadgetType" id="gadgetType" placeHolder="Gadget Type here...">
            @error('gadgetType')
                <div>{{ $message }}</div>
         
            @enderror
        </div>
    
        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeHolder="Price here...">
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