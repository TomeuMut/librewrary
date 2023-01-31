
@extends('layouts.web')

@section('body')
<div>
    <img src="https://source.unsplash.com/1920x500/?homebrew" alt="">
</div>
<div class="flex px-6 py-4 text-left justify-left">
    <div class="">
        <label for="order" class="block text-sm font-medium text-gray-700">Ordenar por:</label>        
        <select id="order" name="location" class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
            <option value="" selected disabled>Fecha ASC</option>
            <option value="">Fecha DESC</option>            
        </select>
    </div>               
</div>
<div class="flex px-6 py-4 justify-center text-center flex-wrap">
    <div class="w-1/1 px-6 py-4 my-3 hover:shadow-xl transition-shadow duration-100 rounded-md cursor-pointer flex items-center border-2 border-primary-default border-opacity-25">
        <div class="flex py-2 justify-start">
            <img class="rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="flex flex-col pl-4 text-left">
            <p class="py-2 text-lg font-bold">Permio a la mejor cerveza de Mallorca</p>
            <p class="py-2 text-sm text-left">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim sed alias exercitationem minus eaque quisquam fugiat sint laudantium provident voluptas velit quaerat voluptatum labore aperiam, ipsa delectus beatae repudiandae in!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto explicabo nobis vel dolore quasi dolorum harum. Aliquid, dicta! Vitae sit mollitia assumenda blanditiis quia ipsam, modi commodi nisi necessitatibus optio!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eaque accusamus soluta inventore. Dolorem, consequuntur? Voluptatem nostrum itaque, deleniti, sit voluptas temporibus nihil illum adipisci perferendis ea atque, mollitia explicabo?
            </p>    
            <a href="#" class="my-2 w-fit rounded-md bg-primary-default px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-secondary-default hover:text-primary-default">Ver Mas</a>             
        </div>    
    </div>
    <div class="w-1/1 px-6 py-4 my-3 hover:shadow-xl transition-shadow duration-100 rounded-md cursor-pointer flex items-center border-2 border-primary-default border-opacity-25">
        <div class="flex py-2 justify-start">
            <img class="rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="flex flex-col pl-4 text-left">
            <p class="py-2 text-lg font-bold">Permio a la mejor cerveza de Mallorca</p>
            <p class="py-2 text-sm text-left">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim sed alias exercitationem minus eaque quisquam fugiat sint laudantium provident voluptas velit quaerat voluptatum labore aperiam, ipsa delectus beatae repudiandae in!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto explicabo nobis vel dolore quasi dolorum harum. Aliquid, dicta! Vitae sit mollitia assumenda blanditiis quia ipsam, modi commodi nisi necessitatibus optio!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eaque accusamus soluta inventore. Dolorem, consequuntur? Voluptatem nostrum itaque, deleniti, sit voluptas temporibus nihil illum adipisci perferendis ea atque, mollitia explicabo?
            </p>    
            <a href="#" class="my-2 w-fit rounded-md bg-primary-default px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-secondary-default hover:text-primary-default">Ver Mas</a>             
        </div>    
    </div>
    <div class="w-1/1 px-6 py-4 my-3 hover:shadow-xl transition-shadow duration-100 rounded-md cursor-pointer flex items-center border-2 border-primary-default border-opacity-25">
        <div class="flex py-2 justify-start">
            <img class="rounded-md" src="https://source.unsplash.com/300x300/?beer" alt="">
        </div>
        <div class="flex flex-col pl-4 text-left">
            <p class="py-2 text-lg font-bold">Permio a la mejor cerveza de Mallorca</p>
            <p class="py-2 text-sm text-left">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Enim sed alias exercitationem minus eaque quisquam fugiat sint laudantium provident voluptas velit quaerat voluptatum labore aperiam, ipsa delectus beatae repudiandae in!
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto explicabo nobis vel dolore quasi dolorum harum. Aliquid, dicta! Vitae sit mollitia assumenda blanditiis quia ipsam, modi commodi nisi necessitatibus optio!
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit eaque accusamus soluta inventore. Dolorem, consequuntur? Voluptatem nostrum itaque, deleniti, sit voluptas temporibus nihil illum adipisci perferendis ea atque, mollitia explicabo?
            </p>    
            <a href="#" class="my-2 w-fit rounded-md bg-primary-default px-3.5 py-1.5 text-base font-semibold leading-7 text-white shadow-sm hover:bg-secondary-default hover:text-primary-default">Ver Mas</a>             
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