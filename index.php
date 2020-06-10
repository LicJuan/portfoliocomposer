<!doctype html>
<html lang="en">

<head>
    <title>Portfolio with PHP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark shadow">
        <a class="navbar-brand" href="#">XJERGX</a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Carrer Summary</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Projects</a>
                </li>

            </ul>
        </div>
    </nav>
    <!-- JUMBOTRON AREA  -->
    <div class="jumbotron bg-dark text-white">

        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-3">
                    <img src="https://via.placeholder.com/200" alt="">
                </div>
                <div class="col-md-9">
                    <h1><?= $name ?></h1>
                    <h3 class="text-info">PHP DEVELOPER</h3>

                    <ul class="list-unstyled">
                        <li>Mail: lic.juan94@gmail.com</li>
                        <li>Phone: 0986236788</li>
                        <li>LinkedIn: https://linkedin.com</li>
                        <li>Twitter: @XJERGX</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- JUMBOTRON AREA -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Carrer Summary</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet enim aut veniam numquam? Asperiores culpa reiciendis quibusdam, harum cumque nisi odio, commodi corrupti voluptatibus dignissimos veritatis ea, sint quos laborum!
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima quidem temporibus neque ipsam minus unde ipsa reiciendis necessitatibus Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt quibusdam enim doloremque corrupti, quaerat facilis nihil quae maiores temporibus illo nemo, sequi voluptates et ullam sit dicta dolor! Cum, sed. porro maiores aperiam quae ullam perspiciatis, modi quam. Hic delectus eum qui.
                </p>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-md-8">
                <h1>Work Experience</h1>
                <hr>
                <h5 class="text-info">PHP DEVELOPER</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum suscipit soluta mollitia, iusto itaque fugiat a ipsum sunt sed! Quidem quo ex esse aliquam, cumque magni ad eveniet praesentium neque.</p>
                <ul class="unstyled">
                    <li>item1</li>
                    <li>item2</li>
                    <li>item3</li>
                    <li>item4</li>
                </ul>
                <h5 class="text-info">PYTHON DEVELOPER</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum suscipit soluta mollitia, iusto itaque fugiat a ipsum sunt sed! Quidem quo ex esse aliquam, cumque magni ad eveniet praesentium neque.</p>
                <ul class="unstyled">
                    <li>item1</li>
                    <li>item2</li>
                    <li>item3</li>
                    <li>item4</li>
                </ul>
                <!-- PROJECTS -->
                <h1>Projects</h1>
                <hr>
                <div class="project">
                    <h5 class="text-info">Project Item</h5>
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://via.placeholder.com/160" alt="">
                        </div>
                        <div class="col-md-9">
                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt a ipsum voluptas. Voluptatem dolores praesentium blanditiis quia adipisci veniam nihil, quam, reprehenderit saepe magnam est cupiditate officiis similique, deserunt modi?</p>
                            <p>Tecnologies used: <span class="badge badge-primary m-1">PHP</span><span class="badge badge-primary m-1">REACTJS</span></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <h1>Skills & Tools</h1>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>