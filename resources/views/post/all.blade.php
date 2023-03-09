<x-layout>
    <x-slot:title>
        {{ 'All-posts' }}-site.com
    </x-slot:title>

    @foreach ($posts as $post)
        <div>
            <h2>{{ $post->title }}</h2>
            <div>
                {{ $post->text }}
            </div>
        </div>
    @endforeach

    @foreach($titles as $title)
        <div>{{ $title }}</div>
    @endforeach
</x-layout>
