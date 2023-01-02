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
    <title>STUDENT - MASOMO SCHOOL</title>
</head>

<body>
    <nav class="navbar w-100">
        <div class="school_logo">
            <img src="/images/masomo_logo.png" alt="">
        </div>
        <div class="nav_links">
            <a href="{{route('student')}}"><button class="button-89 w-100" role="button">BACK</button></a>
        </div>
    </nav>
    <section class="main w-100 p-4" style="min-height: 70vh; justify-content:start;">
        <div class="unit-head w-100">
            <div class="unit-name w-75">
                <h2>{{$unit->unit_name}}</h2>
                <h4>ICS{{$unit->unit_code}}</h4>
            </div>
            <div class="lecturer w-25">
                <p>Tr. {{$unit->unit_lecturer}}</p>
            </div>
        </div>
        @foreach ($unit_coursework as $item)
        <div class="content w-100">
            <h4>{{$item->cwork_head}}</h4>
            <hr>
            <p>{{$item->cwork_desc}}</p>

            <div class="content-owner w-100">
                <h3>POSTED BY: {{$item->posted_by}}</h3>
                <h3>CREATED AT: {{$item->created_at}}</h3>
            </div>

        </div>
        @endforeach

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