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
        .image-slider {
            max-width: 100%;
            overflow: hidden;
        }
        .image-slider .carousel-inner {
            white-space: nowrap;
        }
        .image-slider .carousel-item {
            display: inline-block;
            width: 100%;
            text-align: center;
        }
        .image-slider .carousel-control-prev,
        .image-slider .carousel-control-next {
            top: auto;
            bottom: 0;
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: #000; /* Black color */
    }

    .carousel-control-prev, .carousel-control-next {
        color: #fff; /* White color for the arrow inside the icon */
    }
    </style>
</head>
<body>
    <div class="container-fluid py-5 bg-image text-white text-center">
        <h1 class="mb-4 text-black">About Us</h1>
        <p class="lead text-black">Creating Connections, Empowering Educators</p>
    </div>
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="image-slider">
                    <div id="missionCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://source.unsplash.com/random/160x160?car" class="img-fluid rounded" alt="Our Mission">
                            </div>
                            <div class="carousel-item">
                                <img src="https://source.unsplash.com/random/160x160?car" class="img-fluid rounded" alt="Our Mission">
                            </div>
                            <!-- Add more carousel items as needed -->
                        </div>
                        <a class="carousel-control-prev" href="#missionCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#missionCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <div class="bg-light p-4" style="height: auto; width: 100%;">
                    <h2 class="section-title">Our Mission</h2>
                    <p class="section-text">Our mission is to create a platform where teachers and schools can connect seamlessly. We believe in the power of education and aim to provide opportunities for teachers to find their perfect teaching position, and for schools to discover truly remarkable educators.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="image-slider">
                    <div id="whatWeDoCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="https://source.unsplash.com/random/160x160?car" class="img-fluid rounded" alt="What We Do">
                            </div>
                            <div class="carousel-item">
                                <img src="https://source.unsplash.com/random/160x160?car" class="img-fluid rounded" alt="What We Do">
                            </div>
                            <!-- Add more carousel items as needed -->
                        </div>
                        <a class="carousel-control-prev" href="#whatWeDoCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#whatWeDoCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
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

    <!-- Bootstrap JavaScript (required for the carousel) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>

@endsection
