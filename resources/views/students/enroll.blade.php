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
    <link rel="stylesheet" href="/css/enroll.css">
    <title>ENROLL - MASOMO SCHOOL</title>
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
    <div class="w-100 form-holder">

        <form action="" method="post" class="form w-75">
            <div class="enrollment-header w-100">
                <h1>FILL IN THE FORM BELOW TO REGISTER FOR ENROLLMENT</h1>
            </div>
            <hr>

            <div class="student-data w-100">
                <div class="data-head">
                    <h3>Student details</h3>
                    <hr class="w-100">
                </div>
                <div class="split-input w-100 p-0">
                    <div class="s-input w-100">
                        <label for="f_name">First Name :</label>
                        <input type="text" class="f_name form-control w-100" name="f_name" id="f_name">
                    </div>
                    <div class="s-input w-100">
                        <label for="l_name">Last Name :</label>
                        <input type="text" class="l_name form-control w-100" name="l_name" id="l_name">
                    </div>
                </div>
                <div class="split-input w-100 p-0">
                    <div class="split-input">
                        <div class="s-input w-100">
                            <label for="age">Age :</label>
                            <input type="number" min="0" class="age form-control w-100" name="age" id="age">
                        </div>
                        <div class="s-input w-100">
                            <label for="gender">Gender :</label>
                            <select name="gender" id="" class="w-100 form-control">
                                <option value="Female" selected>Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="s-input w-100">
                        <label for="f_name">Date Of Birth :</label>
                        <input type="date" class="dob form-control w-100" name="dob" id="dob">
                    </div>
                </div>
                <div class="s-input w-100">
                    <label for="email">Email address :</label>
                    <input type="email" class="email form-control w-100" name="email" id="email">
                </div>
                <div class="s-input w-100">
                    <label for="phone_no">Phone number :</label>
                    <input type="number" class="phone_num form-control w-100" name="phone_num" id="phone_num">
                </div>
                <div class="s-input w-100">
                    <label for="phone_no">Address :</label>
                    <input type="text" class="address form-control w-100" name="address" id="address">
                </div>

                <div class="s-input w-100">
                    <label>Submit a copy of the following documents: </label>
                </div>
                <div class="split-input w-100 p-0">
                    <div class="s-input w-100">
                        <label for="b_cert">Birth certificate :</label>
                        <input type="file" class="b_cert form-control w-100" name="b_cert" id="b_cert">
                    </div>
                    <div class="s-input w-100">
                        <label for="passport">Passport Photo :</label>
                        <input type="file" class="passport form-control w-100" name="passport" id="passport">
                    </div>
                </div>


            </div>

            <div class="form-button p-3 w-25">
                <button class="btn btn-primary w-100" type="submit">SUBMIT</button>
            </div>
        </form>
    </div>
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