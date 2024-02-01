@extends('layouts.MainLayout')

@section('content')
    <button {{ $attributes->merge(['class' => 'text-lg text-white bg-blue-700 hover:bg-blue-800 rounded-lg p-1 px-3 my-4']) }}>
        {{ $slot }}
    </button>