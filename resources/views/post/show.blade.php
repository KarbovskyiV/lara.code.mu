<x-layout>
    <x-slot:title>
        {{ $title }}-site.com
    </x-slot:title>

    <p>Hello, {!! $str !!}</p>
    current time: {{ date('d-m-Y') }}

    <p>Name: {{ $employee['name'] }}</p>
    <p>Age: {{ $employee['age'] }}</p>
    <p>Salary: {{ $employee['salary'] }}</p>
    <p>Count array:{{ count($employee) }}</p>

    <ul>
        @foreach($numbers as $number)
            <li>{{ $number }} {{ 'в квадраті ' . $number * $number }}</li>
        @endforeach
    </ul>

    Break
    <p>
        @foreach($numbers as $num)
            {{ $num }}
            @break($num === 0)
        @endforeach
    </p>

    Continue
    <p>
        @foreach($numbers as $num)
            @continue($num === 0)
            {{ $num }}
        @endforeach
    </p>

    @php
        echo 'PHP';
    @endphp

    <p>
        For loop
        @for($i = 0; $i < 10; $i++)
            {{ $i }}
        @endfor
    </p>

    Loop var
    <ul>
        @foreach($array_str as $arr)
            @if($loop->first)
                <li class="first">{{ $arr }}</li>
            @elseif($loop->last)
                <li class="last">{{ $arr }}</li>
            @endif
            {{ $arr }}
        @endforeach
    </ul>

    <p>Парні числа</p>
    <ul>
        @foreach($numbers as $number)
            @if($number % 2 === 0)
                <li>{{ $number }}</li>
            @endif
        @endforeach
    </ul>

    2 dimensional array
    <ul>
        @foreach($twoDarr as $array)
            <li>
                <ul>
                    @foreach($array as $arr)
                        <li>{{ $arr }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

    multidimensional arrays
    <ul>
        @foreach($employees as $employee)
            {{ $employee['name']}}
            {{ $employee['surname']}}
            {{ $employee['salary']}}
        @endforeach
    </ul>

    Forelse
    @forelse($users as $user)
        <p>{{ $user }}</p>
    @empty
        <p>Users array empty</p>
    @endforelse

    @if(is_array($data))
        @foreach($data as $num)
            <ul>{{ $num }}</ul>
        @endforeach
    @elseif(is_numeric($data))
        <p>{{ $data }}</p>
    @endif

    <ul>
        @foreach($array_str as $key => $value)
            <p>{{ $key + 1 . ' =>' }} {{ $value }}</p>
        @endforeach
    </ul>

    {{--    @if(count($numbers) > 0)--}}
    {{--        <p>{{ array_sum($numbers) }}</p>--}}
    {{--    @elseif(count($numbers) === 0)--}}
    {{--        <p>Empty</p>--}}
    {{--    @endif--}}

    <p>{{ $location['country'] ?? 'Ukraine' }}</p>
    <p>{{ $location['city'] ?? 'Kyiv' }}</p>

    <p>{{ $year ?? date('Y') }}</p>
    <p>{{ $month ?? date('m') }}</p>
    <p>{{ $day ?? date('d') }}</p>

    <p class="{{ $class }}">Class</p>

    <input value="{{ $input1 }}">
    <input value="{{ $input2 }}">
    <input value="{{ $input3 }}">

    <p style="{{ $color }}">Paragraph</p>
    <a href="{{ $href }}" target="_blank">{{ $text }}</a>

    @unless($isAuth > 18)
        <p>Too young</p>
    @endunless

    @if($isAuth > 18)
        <p>Text for old</p>
    @elseif($isAuth < 18)
        <p> Text for young</p>
    @else
        <p>Text for 18 year old</p>
    @endif

</x-layout>
