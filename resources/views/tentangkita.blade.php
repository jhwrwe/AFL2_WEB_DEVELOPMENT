@extends('layouts.template')
@section('layout_content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .bg-image {
            background-image: url('https://source.unsplash.com/random/160x160?car');
            background-size: cover;
            background-position: center;
            opacity: 0.5;
        }
        .section-title {
            font-weight: bold;
            color: #333;
            margin-bottom: 20px;
        }
        .section-text {
            color: #666;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container-fluid py-5 bg-image text-white text-center">
        <h1 class="mb-4">About Us</h1>
        <p class="lead">Creating Connections, Empowering Educators</p>
    </div>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-6">
                <img src="https://source.unsplash.com/random/160x160?car" class="img-fluid rounded mb-4" alt="Our Mission" style="height: auto; width: 100%;">
                <div class="bg-light p-4" style="height: auto; width: 100%;">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="section-text">Our mission is to create a platform where teachers and schools can connect seamlessly. We believe in the power of education and aim to provide opportunities for teachers to find their perfect teaching position, and for schools to discover truly remarkable educators.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="https://source.unsplash.com/random/160x160?car" class="img-fluid rounded mb-4" alt="What We Do" style="height: auto; width: 100%;">
                <div class="bg-light p-4" style="height: auto; width: 100%;">
                    <h2 class="section-title">What We Do</h2>
                    <p class="section-text">We provide a platform where teachers can apply for teaching positions in various fields, and schools can accept or reject applications based on their requirements. Our goal is to make the process of hiring teachers easier, faster, and more efficient for schools, and to provide teachers with a wide range of job opportunities.</p>
                </div>
            </div>
        </div>
        <div class="row mt-5 bg-light p-4">
            <div class="col-lg-12">
                <h2 class="section-title">Meet the Team</h2>
                <p class="section-text">We're a dedicated team of professionals who believe in the power of education. We come from diverse backgrounds, but we all share a common goal: to create a platform that empowers teachers and schools.</p>
            </div>
        </div>
    </div>
</body>
</html>

@endsection
