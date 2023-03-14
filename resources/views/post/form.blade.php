<x-layout>
    <x-slot:title>
        {{ 'Form' }}-site.com
    </x-slot:title>

    <form action="" method="POST">
        @csrf
        <input name="name">
        <input name="age">
        <input name="salary">
        <input type="submit">
    </form>

</x-layout>
