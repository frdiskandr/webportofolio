<x-layout>
    <x-slot name="title">
        Contack
    </x-slot>

    <div class="main-contack-countener">
        <div>
  <div class="px-4 sm:px-0">
    <h3 class="text-base font-semibold leading-7 text-gray-900">Developmen information</h3>
    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details and application.</p>
  </div>
  <div class="mt-6 border-t border-gray-100">
    <dl class="divide-y divide-gray-100">
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Full name</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Muhammad Faried Iskandar</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Position</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Full Stack Developer</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Email address</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">fariditb159@gmail.com</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Programing Language</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Html, Css, Js, Php, Laravel, C++.</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">About</dt>
        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">Fugiat ipsum ipsum deserunt culpa aute sint do nostrud anim incididunt cillum culpa consequat. Excepteur qui ipsum aliquip consequat sint. Sit id mollit nulla mollit nostrud in ea officia proident. Irure nostrud pariatur mollit ad adipisicing reprehenderit deserunt qui eu.</dd>
      </div>
      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
        <dt class="text-sm font-medium leading-6 text-gray-900">Attachments</dt>
        <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
          <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
            <li class="flex items-center justify-between py-4 pl-4 pr-5 text-sm leading-6">
              <div class="flex w-0 flex-1 items-center">
                <svg class="h-5 w-5 flex-shrink-0 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M15.621 4.379a3 3 0 00-4.242 0l-7 7a3 3 0 004.241 4.243h.001l.497-.5a.75.75 0 011.064 1.057l-.498.501-.002.002a4.5 4.5 0 01-6.364-6.364l7-7a4.5 4.5 0 016.368 6.36l-3.455 3.553A2.625 2.625 0 119.52 9.52l3.45-3.451a.75.75 0 111.061 1.06l-3.45 3.451a1.125 1.125 0 001.587 1.595l3.454-3.553a3 3 0 000-4.242z" clip-rule="evenodd" />
                </svg>
                <div class="ml-4 flex min-w-0 flex-1 gap-2">
                  <span class="truncate font-medium">resume_M_Farid_iskandar.pdf</span>
                  <span class="flex-shrink-0 text-gray-400">1.4mb</span>
                </div>
              </div>
              <div class="ml-4 flex-shrink-0">
                <a href="https://drive.google.com/file/d/1ryIhudeKh4-cc-XMRFMYcmH46kYzEln9/view?usp=sharing" target="_blank" class="font-medium text-indigo-600 hover:text-indigo-500">Download</a>
              </div>
            </li>
          </ul>
        </dd>
      </div>
    </dl>
  </div>
</div>

    </div>

    <div class="main-countener-contack">
        <div class="countener-contack">
            <div class="contack">
                <a href="https://www.linkedin.com/in/faridiskandar/" target="_blank"><i class="bi bi-linkedin"></i>
                <p>linkedin</p>
                </a>
            </div>
            <div class="contack">
                 <a href="https://www.instagram.com/qwfrdzy_/" target="_blank"><i class="bi bi-github"></i>
                 <p>github</p>
                </a>
            </div>
           <div class="contack">
             <a href="https://www.instagram.com/qwfrdzy_/" target="_blank"><i class="bi bi-instagram"></i>
             <p>instagram</p>
            </a>
           </div>
        </div>
    </div>
</x-layout>
<style>
    .main-countener-contack{
        background-color: #0d6efd
        display: grid;
        place-content: center;
        padding: 3rem;
    }
    .countener-contack{
        display: flex;
        justify-content: center;
        gap: 3rem;
        font-size: 2rem;
        transition-all 0.5s ease-in-out;
    }
    .countener-contack a:hover{
        transform: scale(1.2);
        color: #0d6efd;
        cursor: pointer;
    }

    .contack i{
        display: flex;
        justify-content: center;
        align-items: center;
        place-content: center;
    }
</style>