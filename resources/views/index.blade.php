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
    <div class ="bg-black">
      <div class="d-flex flex-column align-items-center justify-content-center vh-100 position-relative m-0 p-0 bg-light">
        <div class="position-relative display-1 text-white mb-0 p-4" style="z-index: 2; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); width: 100%; text-align: center;">Loading</div>
        <img class="position-absolute w-100 h-100 rounded" style="object-fit: cover; z-index: 1; opacity: 0.5;" src="images\shutterstock_2183363749-scaled.jpg" alt="Image">
    </div>
</div>
</body>
</html>

@endsection
