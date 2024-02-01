@extends('layouts.MainLayout')

@section('content')
    <div class="text-white relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                <div>

                    <h1 class="dark:text-white text-2xl text-center">Login</h1>

                    <form class="p-6" method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <label for="email" class="">{{ __('Email Address') }}</label>

                            <div class="grid">
                                <input class="rounded-lg text-black" id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback text-sm mt-1" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input class="rounded-lg text-black" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-6">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                      {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
 
                        <div class="text-center">
                            <x-Button type="submit">
                                {{ ('Login') }}
                            </x-Button>

                                <a class="text-sm text-gray-400 hover:text-white" href="/">
                                    {{ __('Forgot Your Password?') }}
                                </a>

                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
