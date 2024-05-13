<x-layout>
  <x-slot name="title">
    Portofolio
  </x-slot>

@foreach ($projeks as $projek)
  
  <ul role="list" class="divide-y divide-gray-100">
  <li class="flex justify-between gap-x-6 py-5">
    <div class="flex min-w-0 gap-x-4">
      <img class="h-12 w-12 flex-none rounded-full bg-gray-50" src="{{ $projek['image'] }}" alt="">
      <div class="min-w-0 flex-auto">
        <p class="text-sm font-semibold leading-6 text-gray-900">{{ $projek['title'] }}</p>
        <p class="mt-1 truncate text-xs leading-5 text-gray-500">{{ $projek['deskripsi'] }}</p>
      </div>
    </div>
    <div class="hidden shrink-0 sm:flex sm:flex-col sm:items-end">
      <a href="{{ $projek['link'] }}"><p class="text-sm leading-6 text-blue-600 hover:underline">lets see &raquo;</p></a>
      <p class="mt-1 text-xs leading-5 text-gray-500">Last seen <time datetime="2023-01-23T13:23Z">{{ $projek['created_at'] }}</time></p>
    </div>
  </li>
</ul>

@endforeach

</x-layout>