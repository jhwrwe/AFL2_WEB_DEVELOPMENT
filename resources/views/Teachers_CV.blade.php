
@extends('layouts.template')
@section('layout_content')



<div class="bg-white p-6 mx-auto max-w-3xl rounded-md shadow-lg">
    <h1 class="text-3xl font-bold text-center mb-6">{{ $project['name'] }}</h1>

    <div class="my-6">
        <h2 class="text-2xl font-bold">Personal Information</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <span class="text-gray-600">Age:</span>
                {{ $project['age'] }}
            </div>
            <div>
                <span class="text-gray-600">Email:</span>
                {{ $project['email'] }}
            </div>
            <div>
                <span class="text-gray-600">Username:</span>
                {{ $project['username'] }}
            </div>
            <div>
                <span class="text-gray-600">Nationality:</span>
                {{ $project['nationality'] }}
            </div>
            <div>
                <span class="text-gray-600">Gender:</span>
                {{ $project['gender'] }}
            </div>
            <div>
                <span class="text-gray-600">Phone:</span>
                {{ $project['phone'] }}
            </div>
        </div>
    </div>

    <div class="my-6">
        <h2 class="text-2xl font-bold">Education</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <span class="text-gray-600">Majors:</span>
                {{ $project['majors'] }}
            </div>
            <div>
                <span class="text-gray-600">Attended:</span>
                {{ $project['attended'] }}
            </div>
        </div>
    </div>

    <div class="my-6">
        <h2 class="text-2xl font-bold">Work Experience</h2>
        <p>{{ $project['work_experience'] }}</p>
    </div>

    <div class="my-6">
        <h2 class="text-2xl font-bold">Skills</h2>
        <p>{{ $project['skills'] }}</p>
    </div>

    <div class="my-6">
        <h2 class="text-2xl font-bold">Additional Information</h2>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <span class="text-gray-600">Description:</span>
                {{ $project['description'] }}
            </div>
            <div>
                <span class="text-gray-600">Hobbies:</span>
                {{ $project['Hobbys'] }}
            </div>
            <div class="col-span-2">
                <span class="text-gray-600">About:</span>
                {{ $project['about'] }}
            </div>
        </div>
    </div>
</div>
@endsection
