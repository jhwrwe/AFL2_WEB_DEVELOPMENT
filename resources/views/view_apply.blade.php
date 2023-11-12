
@extends('layouts.template')
@section('layout_content')

</table>
    <br />
    <br />
    <br />
<div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
    <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
       APPLY
    </h2>
    <div class="w-full mb-4">
        <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
    </div>
<div aria-label="group of cards" tabindex="0" class="focus:outline-none py-8 w-full">

    @foreach($applies as $user)
        <div class="lg:flex items-center justify-center w-full">
            <div tabindex="0" aria-label="card" class="focus:outline-none lg:w-4/12 lg:mr-7 lg:mb-0 mb-7 bg-white p-6 shadow rounded">
                <div class="flex items-center border-b border-gray-200 pb-6">
                    <div class="flex items-start justify-between w-full">
                        <div class="pl-3 w-full">
                            ID School:
                            <a href ="/Schools_info/{{$user['id_school_apply']}}">
                            <p tabindex="0" class="focus:outline-none text-xl font-medium leading-5 text-gray-800">{{ $user['id_school_apply'] }}</p>
                            <a>
                        </div>

                        <div role="img" aria-label="bookmark">
                            <svg class="focus:outline-none" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="px-2">
                    ID Teacher  :
                    <a href ="/Teachers_info/{{$user['id_teacher_apply']}}">
                    <p tabindex="0" class="focus:outline-none text-sm leading-5 py-4 text-gray-600">{{ $user['id_teacher_apply'] }}</p>
                    <a>

                </div>
            </div>
        </div>
</div>
    @endforeach
</div>

@endsection
