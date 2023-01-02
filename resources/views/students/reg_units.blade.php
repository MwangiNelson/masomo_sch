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
    <title>HOME - MASOMO SCHOOL</title>
</head>

<body>
    <nav class="navbar w-100">
        <div class="school_logo">
            <img src="images/masomo_logo.png" alt="">
        </div>
        <div class="nav_links">

            <a href="{{route('student')}}"> <button class="button-89 w-100" role="button">BACK </button></a>
        </div>

    </nav>
    <section class="main-2 w-100 pt-2">
        <div class=" header w-75">
            <h3>AVAILABLE COURSES</h3>
            <hr>
        </div>
        @if(Session::get('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
        @endif

        @if(Session::get('fail'))
        <div class="alert alert-danger">
            {{ Session::get('fail') }}
        </div>
        @endif
        <div class="registration-section w-75">
            @foreach ($unit as $item)
            <div class="unit-card-reg">
                <div class="card-details w-100">
                    <h6>COURSE NAME: </h6>
                    <h4>{{$item->unit_name}}</h4>
                    <p>Chapters: <span class="chapters">{{$item->unit_chapters}}</span></p>
                    <h6>Description:</h6>
                    <hr class="w-50">
                    <span class="chapters">{{$item->unit_desc}}</span>
                    <hr>
                    <div class="w-100" style="display: flex; flex-direction:row; text-transform:uppercase; align-items:baseline; gap:2rem;">
                        <h6>LECTURER:
                        </h6>
                        <p>{{$item->unit_lecturer}}</p>
                    </div>

                </div>
                <form action="{{url('reg_unit/'.$item->id )}}" method="post">@csrf<button class="register-btn">REGISTER</button></form>

            </div>
            @endforeach
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