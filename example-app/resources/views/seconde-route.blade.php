@extends('layouts.MainLayout')

@section('content')
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
        <div class="grid grid-col-1 text-center">
            <h2 class="p-6 text-xl font-semibold text-gray-900 dark:text-white">SECONDE ROUTE</h2>
               
            <x-Button url="/">
                {{ __('Home') }}
            </x-Button>
        </div>   
    </div>
