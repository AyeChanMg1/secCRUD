<x-app-layout>
    <x-slot name="header">
        <h1>Available Gadgets</h1>
    </x-slot>
    <br>

    <div class="py-12">
    @if (session()->has('success'))

        <div>{{session()->get('success')}}</div>
        
    @endif

    @if (session()->has('warning'))

        <div>{{session()->get('warning')}}</div>
        
    @endif
    
    <a href="{{url('/dashboard')}}">Back</a>
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
                <td>{{$loop->iteration}}</td>
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
</div>
</x-app-layout>