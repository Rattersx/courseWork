<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>

    <x-partials.head />

</head>
<body>
    <div class="container">

        <x-partials.nav />

        <x-ui.alerts />

        <div>
            {{ $slot }}
        </div>    

    
        <footer>
            <x-partials.footer />
        </footer>
    
    </div>
    
    <livewire:scripts>
</body>
</html>