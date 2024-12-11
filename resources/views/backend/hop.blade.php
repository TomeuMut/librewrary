<x-app-layout>
  <x-slot class="py-10" name="header">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
          <h2 class="text-3xl font-bold tracking-tight text-white">
              {{ __('Hop') }}
          </h2>
      </div>
      
  </x-slot>
  
  <div class="mx-auto max-w-7xl px-4 pb-12 sm:px-6 lg:px-8">

      <div class="rounded-lg bg-white px-5 py-6 shadow sm:px-6">

          <div class="h-auto rounded-lg border-4 border-dashed border-gray-200 p-8">

              <form method="POST" action="{{ route('hop.store') }}" class="space-y-8 divide-y divide-gray-200">
                @csrf  {{ csrf_field() }}
                  <div class="space-y-8 divide-y divide-gray-200">
                    <div>
                      <div>
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Lúpulo</h3>
                        <p class="mt-1 text-sm text-gray-500">Aqui podrás dar añadir el lúpulo de tu receta que no este dado de alta en nuestro sistema, muchas gracias de antemano por colaborar</p>
                      </div>
                
                      <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-12">     
                      <div class="sm:col-span-12">
                          <label for="first-name" class="block text-sm font-medium text-gray-700">Titulo de el lúpulo</label>
                          <div class="mt-1">
                              <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                      </div>
                      <div class="sm:col-span-12">
                          <label for="about" class="block text-sm font-medium text-gray-700">Pequeña Descripción de el lúpulo</label>
                          <div class="mt-1">
                              <textarea id="description" name="description" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"></textarea>
                          </div>                            
                      </div>                        
                      <div class="sm:col-span-12">
                      </div>
                      <div class="sm:col-span-6">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Tipo</label>
                          <div class="mt-1">
                              <input type="text" name="type" id="type" autocomplete="family-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                      </div>
                      <div class="sm:col-span-6">
                          <label for="last-name" class="block text-sm font-medium text-gray-700">Alfa</label>
                          <div class="mt-1">
                              <input type="text" name="decimal" id="decimal" autocomplete="family-name" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm">
                          </div>
                      </div>                                                                                               
                        <div class="sm:col-span-12">
                          <label for="cover-photo" class="block text-sm font-medium text-gray-700">Subir Fotos del Lúpulo</label>
                          <div class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6">
                            <div class="space-y-1 text-center">
                              <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                              </svg>
                              <div class="flex text-sm text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500">
                                  <span>Upload a file</span>
                                  <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                              </div>
                              <p class="text-xs text-gray-500">PNG, JPG, GIF up to 10MB</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                                      
                
                  <div class="pt-5">
                    <div class="flex justify-end">
                      <a href="{{route('hop')}}" type="button" class="rounded-md border border-gray-300 bg-white py-2 px-4 text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Cancelar</a>
                      <button type="submit" class="ml-3 inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Guardar</button>
                    </div>
                  </div>
                </form>
          </div>
      </div>
  </div>    
</x-app-layout>
