<x-layout>
    <x-slot:title>
        {{ 'All-users' }}-site.com
    </x-slot:title>

    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Salary</th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->salary }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Remove</button>
                    </form>
                </td>
                <td>
                    <a href="{{ route('users.edit', $user->id) }}">Edit</a>
                </td>
                @endforeach
            </tr>
    </table>

    {{ $users->links() }}
</x-layout>
