<x-layout>
    <x-slot:title>
        {{ 'All-users' }}-site.com
    </x-slot:title>

    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
        </tr>

        @foreach($users as $user)
            {{ dump($user->roles) }}
        @endforeach

    </table>
</x-layout>
