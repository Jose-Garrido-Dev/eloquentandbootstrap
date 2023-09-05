<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>

    <h1 class="display-1"> Componentes II</h1>

    <div class="container py-4">
        <div id="slider-josesito" class="carousel slide" data-bs-ride="carousel"> <!-- con el databsride le decimos a js que es un carousel-->
            <div class="carousel-indicators">
                <button class="active" data-bs-target="#slider-josesito" data-bs-slide-to="0"> </button>
                <button data-bs-target="#slider-josesito" data-bs-slide-to="1"> </button>
                <button data-bs-target="#slider-josesito" data-bs-slide-to="2"> </button>
            </div>
            <div class="carousel-inner carousel-fade" >
                <div class="carousel-item active" data-bs-interval="5000">
                    <img  class="d-block w-100" src="{{ asset('img/carousel1.jpg') }}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Primera Imagen</h5>
                        <p>Esta es la primera imagen</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="4000">
                    <img  class="d-block w-100" src="{{ asset('img/carousel2.jpg') }}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Segunda Imagen</h5>
                        <p>Esta es la segunda imagen</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img  class="d-block w-100" src="{{ asset('img/carousel3.jpg') }}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Tercera Imagen</h5>
                        <p>Esta es la tercera imagen</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" data-bs-target="#slider-josesito" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" data-bs-target="#slider-josesito" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>

</html>