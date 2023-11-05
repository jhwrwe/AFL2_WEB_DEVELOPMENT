<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{$pagetitle}}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">

                    <li class="nav-item {{$ActiveMain ?? ''}} mx-auto px-4 py-2">
                        <a class="nav-link {{$ActiveMaintext ?? ''}}" aria-current="page" href="/">Home</a>
                    </li>

                    <li class="nav-item {{ $ActiveAbout ?? ''}} mx-auto px-4  py-2 ">
                        <a class="nav-link {{$ActiveAbouttext ?? ''}}" href="/tentangkita">About us</a>
                    </li>

                    <li class="nav-item {{ $ActiveContact ?? ''}} mx-auto px-4  py-2">
                        <a class="nav-link {{$Activecontacttext ?? ''}}" href="/help">Help</a>
                    </li>

                </ul>
            </div>
            <a href="/whatever">
                <button class="btn btn-sm btn-outline-secondary" type="button">Login and Register</button>
            </a>
        </div>
    </nav>

        @yield('layout_content')


    <!-- Bootstrap JavaScript (required for the dropdown menu) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>
</html>
