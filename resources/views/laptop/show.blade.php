<x-app-layout>
    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                <a href="{{url('/laptop')}}"><i class="bi bi-arrow-bar-left">Back</i></a>
                <h2>{{$name}} : {{$post->brand}}</h2>
                <hr class="my-3">
                    <div class="py-18">  
                        <div>
                            <i class="block text-black-700 text-sm font-bold mb-6"><h3>Brand Name :</h3></i>
                            <p class="mb-4">{{ $post->brand }}</p>
                        </div>

                        <div><i class="block text-black-700 text-sm font-bold mb-6"><h3>Price :</h3></i>
                            <p>{{ $post->price }}</p>
                        </div>
                    </div>
                    <form action="{{route('laptop.destroy', $post->id)}}" class="md:flex md:justify-center space-x-6" method="POST">
                        @csrf
                        @method('DELETE')
                                            
                        <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">Delete</button>
                        
                    </form>
              </div>
          </div>
        </div>
    </div>
</x-app-layout>