<x-layout>
    <x-slot:title>
        {{ $title }}-site.com
    </x-slot:title>

    Links
    <ul>
        @foreach($links as $link)
            <li><a href="{{ $link['href'] }}">{{ $link['text'] }}</a></li>
        @endforeach
    </ul>

    Table employees
    <table>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Salary</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                @if($employee['salary'] > 2000)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $employee['name'] }}</td>
                    <td>{{ $employee['surname'] }}</td>
                    <td>{{ $employee['salary'] }}</td>
                @endif
            </tr>
        @endforeach
    </table>
    <br>

    Table users
    <table>
        <tr>
            <th>Name</th>
            <th>Surname</th>
            <th>Status</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user['name'] }}</td>
                <td>{{ $user['surname'] }}</td>
                @if($user['banned'] === true)
                    <td style="color: red">{{ 'banned' }}</td>
                @elseif($user['banned'] === false)
                    <td style="color: green">{{ 'active' }}</td>
                @endif
            </tr>
        @endforeach
    </table>

    <p>Input</p>
    @foreach($array_str as $str)
        <input type="text" value="{{ $str }}">
    @endforeach

    <p>Select</p>
    <select name="str" id="str">
        @foreach($array_str as $str)
            <option value="{{ $str }}">{{ $str }}</option>
        @endforeach
    </select>

    <p>Days</p>
    <ul>
        @foreach($days as $day)
            @if($day === $today)
                <li class="active">{{ $day }}</li>
                @continue
            @endif
            <li>{{ $day }}</li>
        @endforeach
    </ul>

</x-layout>
