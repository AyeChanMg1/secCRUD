<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-6">
            @if (session()->has('success'))

        <div>{{session()->get('success')}}</div>
        
    @endif

    @if (session()->has('warning'))

        <div>{{session()->get('warning')}}</div>
        
    @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex flex-row justify-between">
                    <a href="{{url('/dashboard')}}"><i class="bi bi-arrow-bar-left">Back</i></a>
                    <a href="{{url('/laptop/create')}}"><i class="bi bi-plus-circle">Add new item</i></a>
                </div>
                <hr class="my-3">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-row justify-between">
                        <table class="border-collapse table-auto w-full align-center border border-slate-400 ...">
                            <thead>
                                <tr>
                                    <th width='10%' class="text-center border border-slate-300 ...">No</th>
                                    <th width='10%' class="text-center border border-slate-300 ...">Brand</th>
                                    <th width='10%' class="text-center border border-slate-300 ...">Price</th>
                                    <th width='10%' class="text-center border border-slate-300 ...">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $item)
                                <tr>
                                    <td width='10%' class="text-center border border-slate-300 ...">{{$loop->iteration}}</td>
                                    <td width='10%' class="text-center border border-slate-300 ...">{{$item->brand}}</td>
                                    <td width='10%' class="text-center border border-slate-300 ...">{{$item->price}}</td>
                                    <td width='10%' class="text-center border border-slate-300 ...">
                                        <a href="{{route('laptop.show', $item->id)}}">view</a>
                                        <a href="{{route('laptop.edit', $item->id)}}">edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>






{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laptops</title>
</head>
<body>
    <h1>Available Laptops</h1>
    <br>
    @if (session()->has('success'))

        <div>{{session()->get('success')}}</div>
        
    @endif

    @if (session()->has('warning'))

        <div>{{session()->get('warning')}}</div>
        
    @endif
    
    <a href="{{url('/dashboard')}}">Back</a>
    <hr>
    <a href="{{url('/laptop/create')}}">Add new item</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th width='10%'>No</th>
                <th width='20%'>Brand</th>
                <th width='15%'>Price</th>
                <th width='10%'>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $item)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$item->brand}}</td>
                <td>{{$item->price}}</td>
                <td>
                    <a href="{{route('laptop.show', $item->id)}}">view</a>
                    <a href="{{route('laptop.edit', $item->id)}}">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html> --}}