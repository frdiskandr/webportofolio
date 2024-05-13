<x-layout>
  <x-slot name="title">
    About Me
  </x-slot>

  <div class="main-about">
    <img src="{{ URL::asset('image/farid_cv.jpg') }}" alt="img about me">
  </div>
</x-layout>
<style>
  .main-about{
    display: flex;
    justify-content: center;
  }
</style>