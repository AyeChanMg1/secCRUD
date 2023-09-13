<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div class="flex justify-end">
                        <a href="{{url('/phone')}}"><i class="bi bi-arrow-bar-left"></i> Back</a>
                    </div>

                    <hr class="my-3">
                   <form class="w-full" action="{{ route('phone.store') }}" method='POST'>
                        @csrf

                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/5">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="brand">
                              Brand Name
                            </label>
                          </div>
                          <div class="md:w-4/5">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="brand" name="brand" type="text" placeholder="Brand Name Here...">
                            @error('brand')
                                <div>{{ $message }}</div>
         
                            @enderror
                          </div>
                        </div>
                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/5">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="price">
                              Price
                            </label>
                          </div>
                          <div class="md:w-4/5">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="price" name="price" type="text" placeholder="Price Here...">
                            @error('price')
                                <div>{{ $message }}</div>
         
                            @enderror
                          </div>
                        </div>
                        <div class="md:flex md:justify-center space-x-4">
                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                              Create
                            </button>
                            <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="reset">
                              Reset
                            </button>
                        </div>
                      </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

{{-- <form action="{{ route('phone.store') }}" method='POST'>
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
                    </form> --}}