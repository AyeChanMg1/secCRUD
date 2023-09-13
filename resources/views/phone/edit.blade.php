<x-app-layout>
  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
              <a href="{{url('/phone')}}"><i class="bi bi-arrow-bar-left">Back</i></a>
              <div class="py-12">
                <form action="{{route('phone.update', $post->id)}}" method='POST' class="flex flex-col gap-3 justify-center">
                    @csrf
                    @method('PUT')
            
                    
                    <div class="form-group row">
                        <label for="brand" class="block text-gray-700 text-sm font-bold mb-2" for="username">Brand Name</label>
                        <div class="col-sm-10">
                          <input type="brand" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="brand" type="text" name="brand" placeholder="Brand..." value="{{$post->brand}}">
                          @error('brand')
                            <div>{{$message}}</div>
                          @enderror
                        </div>
                      </div>
            
                    <div class="price">
                        <label for="price" class="block text-gray-700 text-sm font-bold mb-2" for="price">Price</label>
                        <div class="col-sm-10">
                          <input type="price" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" name="price" placeHolder="Price..." value="{{$post->price}}">
                          @error('price')
                            <div>{{$message}}</div>
                          @enderror
                        </div>
                    </div>

                    <div class="md:flex md:justify-center space-x-6">
                      <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full " type='submit'>
                      Update
                      </button>
                  </div>     
                </form>          
              </div>
            </div>
        </div>
     </div>
  </div>

    
</x-app-layout>