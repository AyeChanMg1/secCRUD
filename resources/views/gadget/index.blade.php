<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Available Gadgets</h1>
    <br>
    @if (session()->has('success'))

        <div>{{session()->get('success')}}</div>
        
    @endif

    @if (session()->has('warning'))

        <div>{{session()->get('warning')}}</div>
        
    @endif
    
    <a href="{{url('/')}}">Back</a>
    <hr>
    <a href="{{url('/gadget/create')}}">Add new item</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th width='10%'>No</th>
                <th width='20%'>Gadget Type</th>
                <th width='15%'>Price</th>
                <th width='10%'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->gadgetType}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <a href="{{route('gadget.show', $item->id)}}">view</a>
                    <a href="{{route('gadget.edit', $item->id)}}">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>