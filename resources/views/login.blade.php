<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <!-- Fontawesome icons cdn link -->
    <script src="https://kit.fontawesome.com/db540a34d6.js" crossorigin="anonymous"></script>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Lora&family=Nunito:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
    <script src="/js/app.js" defer></script>
    <title>LOGIN - MASOMO SCHOOL</title>
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
    <section class="login-body w-75">
        <div class="login-form-container w-75">
            <form action="{{ route('auth.check') }}" method="POST" class="w-100">
                @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
                @endif

                @csrf
                <div class="input-field w-100">
                    <label for="email">
                        Enter your email here:
                    </label>
                    <input type="email" name="email" required class="form-control w-100">
                    <span class="text-danger">@error('email'){{ $message }} @enderror</span>

                </div>
                <div class="input-field">
                    <label for="password">
                        Enter your password here:
                    </label>
                    <input type="password" name="password" required class="form-control w-100">
                    <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                </div>
                <div class="infomatics w-100">
                    <small class="form-text"><a href="">Forgot password</a> </small>
                </div>
                <button class="btn btn-primary w-100" type="submit">LOG IN</button>
            </form>
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