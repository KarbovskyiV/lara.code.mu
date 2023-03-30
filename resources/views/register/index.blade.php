@extends('layouts.auth')

@section('page.title', 'Register')

@section('auth.content')
    <x-card>
        <x-card-header>
            <x-card-title>
                {{ __('Register') }}
            </x-card-title>

            <x-slot name="right">
                <a href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </x-slot>
        </x-card-header>

        <x-card-body>
            <x-errors/>

            <x-form action="{{ route('register.store') }}" method="post">
                <x-form-item>
                    <x-label required>{{ __('Name') }}</x-label>
                    <x-input name="name" autofocus/>
                </x-form-item>

                <x-form-item>
                    <x-label required>{{ __('Email') }}</x-label>
                    <x-input type="email" name="email"/>
                </x-form-item>

                <x-form-item>
                    <x-label required>{{ __('Password') }}</x-label>
                    <x-input type="password" name="password"/>
                </x-form-item>

                <x-form-item>
                    <x-label required>{{ __('Password confirmation') }}</x-label>
                    <x-input type="password" name="password_confirmation"/>
                </x-form-item>

                <x-form-item>
                    <x-checkbox name="agreement" :checked="!! old('agreement')">
                        {{ __('I agree to the processing of personal data') }}
                    </x-checkbox>
                </x-form-item>

                <x-button type="submit">
                    {{ __('Register') }}
                </x-button>
            </x-form>
        </x-card-body>
    </x-card>
@endsection
