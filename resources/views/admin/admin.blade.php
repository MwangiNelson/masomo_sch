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
    <link rel="stylesheet" href="/css/admin.css">
    <title>ADMIN - MASOMO SCHOOL</title>
</head>


<body>
    <nav class="navbar w-100">
        <div class="school_logo">
            <img src="images/masomo_logo.png" alt="">
        </div>
        <div class="nav_links">
            <a href="/"> <button class="button-89 w-100" role="button">LOGOUT </button></a>
        </div>
    </nav>
    <section class="main w-100">
        <div class="options w-100">
            <button class="btn-opt selected">STUDENTS</button>
            <button class="btn-opt">STAFF</button>
            <button class="btn-opt">REQUESTS</button>
            <button class="btn-opt">UNITS</button>
        </div>

        <div class="panel w-100">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Class</th>
                        <th scope="col">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>BET 2</td>
                        <td>
                            <div class="actions">
                                <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>BET 2</td>
                        <td>
                            <div class="actions">
                                <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>BET 2</td>
                        <td>
                            <div class="actions">
                                <button class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></button>
                                <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

</body>

</html>