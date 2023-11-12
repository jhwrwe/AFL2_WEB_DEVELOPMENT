@extends('layouts.template')
@section('layout_content')

<br>
<br>
<br>
<br>

<body class="bg-gray-100 font-sans">
    <div class="container mx-auto py-12" >
        <h1 class="text-4xl font-bold text-center mb-8">Meet Our School Representatives</h1>
        <div class="grid grid-cols-3 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @php
            $counter = 0;
            @endphp

            @foreach($projects as $pro)
                @if($counter % 1 == 0)
                <div class="w-full sm:w-auto">
                @endif
                <a href="/Schools_info/{{$pro['id']}}">
                    <div class="bg-white shadow-md rounded-lg overflow-hidden mb-4">
                        <img src="images/{{ $pro['image'] }}" alt="images/{{ $pro['image'] }}" class="w-full h-48 object-cover object-center">
                        <div class="p-6">
                            <h2 class="text-xl font-bold mb-2">{{ $pro['name'] }}</h2>
                            <p class="text-gray-600 mb-2">Course: {{ $pro['course'] }}</p>
                            <p class="text-gray-600 mb-2">Major: {{ $pro['criteria'] }}</p>
                            <a href="/Schools_info/{{$pro['id']}}" class="block text-center bg-blue-500 text-white rounded-lg py-2 hover:bg-blue-600 transition duration-300">Learn More</a>
                        </div>
                    </div>
                </a>
                @php
                $counter++;
                @endphp
                @if($counter % 1 == 0 || $loop->last)
                </div>
                @endif
            @endforeach
        </div>
    </div>
</body>
@endsection
