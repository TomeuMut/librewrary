<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('partials.site.web.head')
    
    <body class="antialiased">
        
        @include('partials.site.web.header')
    
        @yield('body')
            

        @include('partials.site.web.footer')

    </body>
    
</html>
