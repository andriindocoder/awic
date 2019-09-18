<!DOCTYPE html>

<html lang="en">

    @include('layouts.jesse.head')
    
    <body>
        
        @include('layouts.jesse.header')
        
        @yield('content')
                
        @include('layouts.jesse.footer')
                
    @include('layouts.jesse.script')
        
    </body>
    
</html>