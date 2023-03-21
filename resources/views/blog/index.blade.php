@extends('layouts.base')

@section('page.title', 'Blog')

@section('content')

    <h1 class="mb-5">
        List posts
    </h1>

    @if(empty($posts))
        Post not found.
    @else

        @foreach($posts as $post)
            <div class="mb-4">
                <h5>
                    <a href="{{ route('blog.show', $post->id) }}">
                        {{ $post->title }}
                    </a>
                </h5>

                <p>
                    {!! $post->content !!}
                </p>
            </div>
        @endforeach
    @endif
@endsection
