@extends('layouts.template')
@section('layout_content')
<body class="bg-gray-100 font-sans">
    <div class="container mx-auto py-12">
        <div class="bg-white shadow-md rounded-lg p-8">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                <div class="text-center">
                    <img src="/images/{{ $project['image'] }}" alt="{{ $project['name'] }}" class="w-full h-auto rounded-lg shadow-md">
                </div>
                <div>
                    <h1 class="text-3xl font-bold mb-4">{{ $project['name'] }}</h1>
                    <p class="text-gray-600 mb-4 text-lg"><span class="font-semibold">Course:</span> {{ $project['course'] }}</p>
                    <p class="text-gray-600 mb-4 text-lg"><span class="font-semibold">criteria:</span> {{ $project['criteria'] }}</p>
                    <p class="text-gray-600 mb-4 text-lg"><span class="font-semibold">About Course:</span> {{ $project['aboutcourse'] }}</p>
                    <a href="#" class="block text-center bg-blue-500 text-white rounded-lg py-3 hover:bg-blue-600 transition duration-300">Apply Now</a>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection
