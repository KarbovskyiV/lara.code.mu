<x-layout>
    <x-slot:title>
        {{ 'Show all' }}-site.com
    </x-slot:title>

    <div class="container">
        @foreach ($users as $user)
            <p>{{ $user->name }}</p>
            <p>{{ $user->age }}</p>
        @endforeach
    </div>

    {{ $users->links() }}

</x-layout>
