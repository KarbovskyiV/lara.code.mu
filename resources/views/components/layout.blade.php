<!DOCTYPE html>
<html>
<head>
    <title>{{ $title }}</title>
</head>
<body>
<div class="wrapper">
    <x-alert>
        <x-slot name="type">
           error
        </x-slot>
        Alert alert
    </x-alert>

    <x-main-menu/>
    <x-header.menu/>
    <x-header/>
    <x-main.menu.nav/>
    <main>
        {{ $slot }}
    </main>
    <x-sidebar.left.info-block/>
    <x-sidebar.info-block/>
    <x-info>
        Info text
    </x-info>
    <x-footer.info/>
    <x-footer/>
</div>
</body>
</html>
