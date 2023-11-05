@extends('layouts.template')
@section('layout_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <h1 class="text-center mb-4">About Us</h1>
        <p class="lead text-center">Creating Connections, Empowering Educators</p>
        <div class="row">
            <div class="col-lg-6">
                <img src="{{ asset('images/mission.jpg') }}" class="img-fluid rounded mb-4" alt="Our Mission">
                <h2>Our Mission</h2>
                <p>Our mission is to create a platform where teachers and schools can connect seamlessly. We believe in the power of education and aim to provide opportunities for teachers to find their perfect teaching position, and for schools to discover truly remarkable educators.</p>
            </div>
            <div class="col-lg-6">
                <img src="{{ asset('images/services.jpg') }}" class="img-fluid rounded mb-4" alt="What We Do">
                <h2>What We Do</h2>
                <p>We provide a platform where teachers can apply for teaching positions in various fields, and schools can accept or reject applications based on their requirements. Our goal is to make the process of hiring teachers easier, faster, and more efficient for schools, and to provide teachers with a wide range of job opportunities.</p>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12">
                <h2>Meet the Team</h2>
                <p>We're a dedicated team of professionals who believe in the power of education. We come from diverse backgrounds, but we all share a common goal: to create a platform that empowers teachers and schools.</p>
                <div class="row">
                    <!-- Add team members here -->
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
