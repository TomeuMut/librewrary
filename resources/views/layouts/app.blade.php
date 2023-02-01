<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>

    @include('partials.site.backend.head')
    
    @include('partials.site.backend.header')
    
    <body class="font-sans antialiased">
        <div class="min-h-full">
            <div class="bg-[#1C6758] pb-64">
                
                @include('layouts.navigation')

                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white dark:bg-gray-800 shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif
            </div>
            <!-- Page Content -->
            <main class="-mt-64 pt-28">
                {{ $slot }}
            </main>
        
        </div>
        {{-- @include('partials.site.backend.footer') --}}
    </body>
</html>
