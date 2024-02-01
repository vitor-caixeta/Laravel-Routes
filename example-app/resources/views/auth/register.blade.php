@extends('layouts.MainLayout')

@section('content')

        <div class="text-white relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">                

                <div class="px-6">
                    <h1 class="dark:text-white text-2xl text-center">{{ __('Register') }}</h1>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="mb-5 text-white">{{ __('Name') }}</label>

                            <div class="">
                                <input id="name" class="rounded-lg text-black" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email">{{ __('Email Address') }}</label>

                            <div class="">
                                <input id="email" class="rounded-lg text-black" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" class="rounded-lg text-black" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" class="rounded-lg text-black" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="flex justify-center items-center">
                            <div>
                                <x-Button type="submit">
                                    {{ __('Register') }}
                                </x-Button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

@endsection
