<x-layout>
    <x-slot:title>
        {{ 'Edit-users' }}-site.com
    </x-slot:title>

    <form action="{{ route('user.update', ['id' => $user->id]) }}" method="POST">
        @method('put')
        <input type="text" name="name" placeholder="name" value="{{ $user->name }}">
        <input type="number" name="age" placeholder="age" value="{{ $user->age }}">
        <input type="number" name="salary" placeholder="salary" value="{{ $user->salary }}">
        <input type="submit" value="Update">
        @csrf
    </form>

</x-layout>
