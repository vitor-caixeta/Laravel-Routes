@extends('layouts.MainLayout')

@section('content')
    <div class="text-white relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="scale-100 p-6 bg-white dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none flex transition-all duration-250 focus:outline focus:outline-2 focus:outline-red-500">

                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6">

                            <h2 class="font-semibold text-xl mb-3 text-center leading-tight">
                                {{ __('Dashboard') }}
                            </h2>

                            {{ __("You're logged in!") }}
                        

                            <div class="flex justify-center items-center">
                            @auth
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <x-Button class="bg-red-700 hover:bg-red-800" type="submit">
                                        {{ ('Logout') }}
                                    </x-Button>
                                </form>
                            @endauth
                            </div>
                            

                        </div>
                    </div>
                </div>

        </div>
    </div>
@endsection
