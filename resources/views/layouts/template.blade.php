<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    #navbar {
        transition: background-color 0.3s;
    }

    #navbar.navbar-light {
        background-color: transparent; /* Set the background color to transparent */
    }

    #navbar.navbar-light.scrolled {
        background-color: #542583; /* Change this to your desired background color when scrolled */
        opacity: 90%;
    }

    #navbar.navbar-light.scrolled .nav-link {
        color: white !important; /* Change the text color for non-active links when scrolled to white */
    }

    #navbar.navbar-light .nav-item.active .nav-link {
        color: black !important; /* Change the text color for the active link */
        background-color: yellow !important; /* Change the background color for the active link to yellow */
    }

    #navbar.navbar-light .login-register {
        color: black !important; /* Change the text color for login/register to black by default */
    }

    #navbar.scrolled .login-register {
        color: white !important; /* Change the text color for login/register to white when scrolled */
    }

    footer {
        background-color: #333; /* Dark gray background for the footer */
        color: white;
        padding: 10px;
        text-align: center;
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{$ActiveMain ?? ''}} mx-auto px-4 py-2">
                        <a class="nav-link {{$ActiveMaintext ?? ''}} py-2 d-none d-md-inline-block" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item {{ $ActiveAbout ?? ''}} mx-auto px-4  py-2 ">
                        <a class="nav-link {{$ActiveAbouttext ?? ''}} py-2 d-none d-md-inline-block" href="/tentangkita">About us</a>
                    </li>
                    <li class="nav-item {{ $ActiveContact ?? ''}} mx-auto px-4  py-2">
                        <a class="nav-link {{$Activecontacttext ?? ''}} py-2 d-none d-md-inline-block" href="/help">Help</a>
                    </li>
                    <li class="nav-item {{ $ActiveContact ?? ''}} mx-auto px-4  py-2">
                        <a class="nav-link {{$Activecontacttext ?? ''}} py-2 d-none d-md-inline-block" href="/schoolseeing">See school</a>
                    </li>
                    <li class="nav-item {{ $ActiveContact ?? ''}} mx-auto px-4  py-2">
                        <a class="nav-link {{$Activecontacttext ?? ''}} py-2 d-none d-md-inline-block" href="/ViewTeacher">See school</a>
                    </li>
                    <li class="nav-item {{ $ActiveContact ?? ''}} mx-auto px-4  py-2">
                        <a class="nav-link {{$Activecontacttext ?? ''}} py-2 d-none d-md-inline-block" href="/view_apply">See school</a>
                    </li>
                </ul>
            </div>
            <a href="/whatever">
                <button class="btn btn-sm btn-outline-warning login-register" type="button">Login and Register</button>
            </a>
        </div>
    </nav>

    @yield('layout_content')
    <footer>
        <p>&copy; 2023 Marketingplace Guru. All rights reserved. | <a href="/privacy-policy">Privacy Policy</a></p>
    </footer>
    <!-- Bootstrap JavaScript (required for the dropdown menu) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script>
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 50) {
                    $('#navbar').addClass('scrolled');
                } else {
                    $('#navbar').removeClass('scrolled');
                }
            });
        });
    </script>
</body>
</html>
