<x-layout>
    <x-slot:title>
        {{ 'All-profiles' }}-site.com
    </x-slot:title>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
        </tr>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->user->name }}</td>
                <td>{{ $profile->user->email }}</td>
            </tr>
        @endforeach
    </table>
</x-layout>
