<x-layout>
    <x-slot:title>
        {{ 'All-users' }}-site.com
    </x-slot:title>

    <form action="/user/submit" method="post">
        @csrf
        <input type="hidden" name="city_id" value="1">
        <input type="text" name="login" placeholder="login">
        <input type="password" name="password" placeholder="password">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="number" name="age" placeholder="age">
        <input type="number" name="salary" placeholder="salary">
        <input type="submit" value="Create">
    </form>
</x-layout>
