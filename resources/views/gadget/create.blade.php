<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div>
                        <a href="{{url('/gadget')}}"><i class="bi bi-arrow-bar-left"></i> Back</a>
                    </div>

                    <hr class="my-3">
                   <form class="w-full" action="{{ route('gadget.store') }}" method='POST'>
                        @csrf

                        <div class="md:flex md:items-center mb-6">
                          <div class="md:w-1/5">
                            <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="brand">
                              Brand Name
                            </label>
                          </div>
                          <div class="md:w-4/5">
                            <input class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="gadget" name="gadgetType" type="text" placeholder="Gadget Name Here...">
                            @error('gadgetType')
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