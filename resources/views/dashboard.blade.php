<x-app-layout>
    <x-slot name="header">
         <h1>Available Items for Today</h1>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                   
                        <ul><i>
                            <li><a href="{{route('phone.index')}}">Phone</a></li><br/>
                            <li><a href="{{route('laptop.index')}}">Laptop</a></li><br/>
                            <li><a href="{{route('gadget.index')}}">Gadgets</a></li>
                            </i>
                        </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
