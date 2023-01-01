<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="/css/students.css">
    <title>TEACHERS PANEL - MASOMO SCHOOL</title>
</head>

<body>
    <nav class="navbar w-100">
        <div class="school_logo">
            <img src="images/masomo_logo.png" alt="">
        </div>
        <div class="nav_links">
            <a href="/"> <button class="button-89 w-100" role="button">HOME </button></a>
            <button class="button-89 w-100" role="button">ABOUT </button>
            <button class="button-89 w-100" role="button">CONTACT </button>
        </div>

    </nav>
    <section class="main w-100">
        <hr class="w-75">
        <div class="units w-75">
            <div class="header w-100">
                <h2>My units</h2>
            </div>
            <hr>
            <div class="units-grid w-100">
                @foreach ($unit_data as $item)
                <div class="unit-card w-100">
                    <div class="sect-1">
                        <h6>Course</h6>
                        <h2>{{$item->unit_name}}</h2>
                        <a href="#">{{$item->unit_chapters}} chapters <i class="fas fa-chevron-right"></i></a>
                    </div>
                    <div class="course-info">
                        <div class="progress-container">
                            <div class="progress"></div>
                            <span class="progress-text">
                                6/9 Challenges
                            </span>
                        </div>
                        <h6>UNIT DETAILS</h6>
                        <hr>
                        <p class="w-75">{{$item->unit_desc}}</p>
                        <a href="unit"> <button class="btn-card">Continue</button></a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <footer class="footer ">
        <div class="copyright">
            <div class="logo-container">
                <a href="/"><img src="images/masomo_logo.png" alt=""> </a>
            </div>
            <h4>©copyright MASOMO 2022</h4>
            <ul class="socials">
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-instagram"></i></li>
                <li><i class="fa-brands fa-twitter-square"></i></li>
            </ul>
        </div>
        <div class="line-up"></div>
        <div class="footer-options">
            <ol>
                <li><a href=""><button class="btn btn-text">Contact Us</button></a></li>
                <li><a href=""><button class="btn btn-text">About Us</button></a></li>
            </ol>
        </div>

    </footer>

</body>

</html>