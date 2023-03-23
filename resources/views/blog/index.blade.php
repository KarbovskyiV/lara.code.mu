@extends('layouts.main')

@section('page.title', 'Blog')

@section('main.content')
    <x-title>
        {{ __('List posts') }}
    </x-title>
    @if(empty($posts))
        {{ __('Posts not found.') }}
    @else
        <div class="row">
            @foreach($posts as $post)
                <div class="col-12 col-md-4">
                    <x-post.card :post="$post"/>
                </div>
            @endforeach
        </div>
    @endif
@endsection