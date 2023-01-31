
@extends('layouts.web')

@section('body')
<div>
    <img src="https://source.unsplash.com/1920x500/?beer" alt="">
</div>
<div class="flex px-6 py-4 text-center justify-center">
    <div class="px-6">
        <label for="type_beer" class="block text-sm font-medium text-gray-700">Tipos de cerveza</label>        
        <select id="type_beer" name="location" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
            <option value="" selected disabled>IPA</option>
            <option value="">NEIPA</option>
            <option value="">STOUT</option>
        </select>
    </div>           
    <div class="px-6 flex flex-col">
        VOL %             
        <input type="range" value="0" min="0" max="30" oninput="this.nextElementSibling.value = this.value">
        <output>0</output>   
    </div>
    <div class="px-6">
        <label for="location" class="block text-sm font-medium text-gray-700">Origen</label>        
        <select id="location" name="location" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
            <option value="" selected disabled>España</option>
            <option value="">Alemania</option>
            <option value="">America</option>
        </select>
    </div> 
</div>
<div class="flex px-6 py-4 justify-center text-center flex-wrap">
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
    <div class="w-1/3 px-6 py-4 hover:shadow-lg  transition-shadow duration-100 rounded-md cursor-pointer">
        <div class="flex justify-center py-2">
            <img class=" rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="">
            <p class="py-2 text-lg font-bold">Beer 1 IPA</p>
            <p class="py-2 text-sm">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reprehenderit</p>
        </div>    
    </div>
</div>
<div class="text-center px-6 py-4">
<nav class="isolate inline-flex -space-x-px rounded-md shadow-sm px-6 py-4" aria-label="Pagination">
    <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
    <span class="sr-only">Previous</span>
    <!-- Heroicon name: mini/chevron-left -->
    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
    </svg>
    </a>
    <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
    <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
    <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
    <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
    <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
    <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
    <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
    <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
    <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
    <span class="sr-only">Next</span>
    <!-- Heroicon name: mini/chevron-right -->
    <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
        <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
    </svg>
    </a>
</nav>
</div>

@endsection