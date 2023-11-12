
@extends('layouts.template')
@section('layout_content')

<body class="bg-gray-100 font-sans">
    <div class="container mx-auto py-12" >
        <h1 class="text-4xl font-bold text-center mb-8">Meet Our School Representatives</h1>
        <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            @foreach($projects as $pro)
            <a href="/Schools_info/{{$pro['id']}}">
                <li class="bg-white shadow-md rounded-lg overflow-hidden">

                    <img src="images\{{ $pro['image'] }}" alt="images\{{ $pro['image'] }}" class="w-full h-64 object-cover object-center">
                    <div class="p-6">
                        <h2 class="text-xl font-bold mb-2">name: {{ $pro['name'] }}</h2>
                        <p class="text-gray-600 mb-4">course: {{ $pro['course'] }}</p>
                        <p class="text-gray-600 mb-4">Major: {{ $pro['criteria'] }}</p>
                        <a href="/Schools_info/{{$pro['id']}}" class="block text-center bg-blue-500 text-white rounded-lg py-2 hover:bg-blue-600 transition duration-300">Learn More</a>
                    </div>
                </li>
            </a>
            @endforeach
        </ul>
    </div>
</body>
@endsection
