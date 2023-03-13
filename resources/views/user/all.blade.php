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
            <tr>
                <td>{{ $user->profile->name }}</td>
                <td>{{ $user->profile->surname }}</td>
                <td>{{ $user->profile->email }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
