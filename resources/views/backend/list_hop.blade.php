<x-app-layout>
    <x-slot class="py-10" name="header">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold tracking-tight text-white">
                {{ __('Recipes') }}
            </h2>
        </div>
        
    </x-slot>
    <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">

<div class="px-4 sm:px-6 lg:px-8">
    <div class="sm:flex sm:items-center">
      <div class="sm:flex-auto">
        <h1 class="text-xl font-semibold text-white">Lupulo</h1>
        <p class="mt-2 text-sm text-white">Aqui podrás ver un listado de las Lupulo que ya estan dadas de alta en nuestro sistema.</p>
      </div>
      <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
        <a href="{{route('hop')}}" class="inline-flex items-center justify-center rounded-md border border-transparent bg-[#3D8361] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[#D6CDA4] hover:text-[#1C6758] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">Añadir Lupulo</a>      </div>
    </div>
    <div class="mt-8 flex flex-col">
      <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
          <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
            <table class="min-w-full divide-y divide-gray-300">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Lupulo</th>                  
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Descripción</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">Tipo</th>                  
                  <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                    <span class="sr-only">Editar</span>
                  </th>
                </tr>
              </thead>
              <tbody class="divide-y divide-gray-200 bg-white">
                @foreach ($hops as $hop)
                <tr>
                  <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6">
                    <div class="flex items-center">
                      <div class="h-10 w-10 flex-shrink-0">
                        <img class="h-10 w-10 rounded-full" src="https://source.unsplash.com/200x200/?hop" alt="">
                      </div>
                      <div class="ml-4">
                        <div class="text-gray-900">{{ $hop->name }}</div>
                      </div>
                    </div>
                  </td>                  
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                    <div class="text-gray-900">{{ $hop->description }}</div>                    
                  </td>              
                  <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{ $hop->type }}</td>
                  <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                    <a href="{{route('hop.edit',$hop->id)}}" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-[#1C6758] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[#D6CDA4] hover:text-[#1C6758] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                      Editar Lupulo
                    </a>                    
                    <a href="{{route('hop.destroy',$hop->id)}}" type="button" class="inline-flex items-center justify-center rounded-md border border-transparent bg-[#1C6758] px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-[#D6CDA4] hover:text-[#1C6758] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                      Eliminar Lupulo
                    </a>                    
                  </td>
                </tr>
                @endforeach                  
                <!-- More people... -->
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
    </div>
</x-app-layout>