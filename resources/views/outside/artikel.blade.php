<x-layout>
    <x-slot name="title">Artikel</x-slot>

<div class="main-contemt-container">
<div class="bg-white" id="artikel">
   @foreach ($posts as $post )
  <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8" >
    <h2 class="text-2xl font-bold tracking-tight text-gray-900">{{ $post['title'] }}</h2>
 
    <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8 ">
      <div class="group relative">
        <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
          <img src="{{ $post['image'] }}" alt="gambar" class="h-500 w-500 object-cover object-center lg:h-full lg:w-full">
        </div>
        <div class="mt-4 flex justify-between">
          <div>
            <h3 class="text-sm text-gray-700">
              <a href="{{ $post['link'] }}">
                <span aria-hidden="true" class="absolute inset-0"></span>
                {{ $post['sumber'] }}
              </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500">{{ $post['deskripsi'] }}</p>
          </div>
          <p class="text-sm font-medium text-gray-900"><a href="{{ $post['link'] }}" class="hover:underline">see&raquo;</a></p>
        </div>
      </div>
      <!-- More products... -->
    </div>
  </div><br>
  @endforeach
</div>
</div>
</x-layout>
{{-- <style>
    #artikel{
        display: flex;
        justify-content: center;
        flex-direction: column;
    }
    #artikel-colume{
        background-color: black;
        
    }
    #colume-artikel{
        display: flex;
        min-width: 80%;
        background-color: white;
    }
    
</style> --}}
