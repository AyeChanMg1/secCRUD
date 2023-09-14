<x-app-layout>


    @if (session()->has('success'))

        <div>{{session()->get('success')}}</div>
        
    @endif

    @if (session()->has('warning'))

        <div>{{session()->get('warning')}}</div>
        
    @endif
    
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex flex-row justify-between">
                        <a href="{{url('/dashboard')}}"><i class="bi bi-arrow-bar-left">Back</i></a>
                        <a href="{{url('/gadget/create')}}"><i class="bi bi-plus-circle">Add new item</i></a>
                    </div>

                    <hr class="my-3">
                    
                    <table class="border-collapse table-auto w-full text-sm">
                        <thead>
                            <tr>
                                <th width='10%' class="border dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">No</th>
                                <th width='20%' class="border dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">Gadget Type</th>
                                <th width='15%' class="border dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">Price</th>
                                <th width='10%' class="border dark:border-slate-600 font-medium p-4 pl-8 pt-3 pb-3 text-slate-400 dark:text-slate-200 text-left">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $item)
                            <tr>
                                <td class="border border-slate-200 dark:border-slate-600 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$loop->iteration}}</td>
                                <td class="border border-slate-200 dark:border-slate-600 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$item->gadgetType}}</td>
                                <td class="border border-slate-200 dark:border-slate-600 p-4 pl-8 text-slate-500 dark:text-slate-400">{{$item->price}}</td>
                                <td class="border border-slate-200 dark:border-slate-600 p-4 pl-8 text-slate-500 dark:text-slate-400">
                                    <a href="{{route('gadget.show', $item->id)}}">view</a>
                                    <a href="{{route('gadget.edit', $item->id)}}">edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>