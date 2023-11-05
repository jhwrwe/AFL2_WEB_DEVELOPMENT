@extends('layouts.template')
@section('layout_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
</head>
<body>
    <div class="d-flex flex-column align-items-center justify-content-center vh-100 position-relative m-0 p-0 bg-light">
        <div class="position-relative h1 text-white mb-0" style="z-index: 2; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);">Welcome to our website</div>
        <img class="position-absolute w-100 h-100 rounded" style="object-fit: cover; z-index: 1;" src="https://source.unsplash.com/random/160x160?car" alt="Image">
        <button class="btn btn-primary position-relative mt-5 " style="z-index: 2;">Click Here</button>
    </div>
</body>
</html>

@endsection
