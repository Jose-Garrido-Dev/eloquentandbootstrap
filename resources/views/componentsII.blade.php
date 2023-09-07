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
                <div class="carousel-item active" data-bs-interval="2000">
                    <img  class="d-block w-100" src="{{ asset('img/carousel1.jpg') }}" alt="">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Primera Imagen</h5>
                        <p>Esta es la primera imagen</p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
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

        <hr>
        <h1 class="display-1"> Agrega Secciones de contenidos colapsables</h1>

    <div class="container py-4"> 
        <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse1"> <!--con data-bs-toogle le indicamos que el boton hara referencia acollapse con js y data-bs-target le indicamos el id del contenido a mostrar -->
            Mostrar/ocultar
        </button>
        <a href="#collapse1" class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#collapse1"> Enlace</a>
        <div id="collapse1" class="collapse mt-2 card card-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi a quo vero reiciendis consequuntur earum nostrum dolorum praesentium, cupiditate minus expedita vitae iure sequi molestias facere! Neque eaque porro quibusdam!</p>
        </div>
    </div>



    <hr><hr><hr>

    
    <hr>
    <h1 class="display-1"> Crea menú desplegables personalizados -Dropdown</h1>

    <div class="container py-4"> 
        <div class="dropdown">
            <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">
            Abrir lista
            </button>
            <ul class="dropdown-menu">
                <li>
                    <h6 class="dropdown-header">Opciones de usuario</h6>
                </li>
            <li> <a class="dropdown-item" href="#">opción 1</li>
            <li> <a class="dropdown-item" href="#">opción 2</li>
            <li> <a class="dropdown-item" href="#">opción 3</li>
                <li>
                    <hr class="dropdown-diver">
                </li>
                <li>
                    <h6 class="dropdown-header">Opciones de Administrador</h6>
                </li>
            <li> <a class="dropdown-item" href="#">opción 1</li>
            <li> <a class="dropdown-item" href="#">opción 2</li>
            <li> <a class="dropdown-item" href="#">opción 3</li>
            </ul>
        </div>
    </div>


    <hr>
    <h1 class="display-1"> Crea ventanas modales para mostrar contenidos</h1>
    <hr>
    <div class="container py-4">
        <button class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#mimodal"> <!--Con este boton le inidcamos-->
            Abrir Modal
        </button>
        <div class="modal fade" id="mimodal" data-bs-backdrop="static" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title">Este es el titulo</h5>
                        <button class="btn-close" data-bs-dismiss="modal"></button> <!--con dat-bs-dismiss llamamos al js para que cierre modal-->
                    </div>
                    <div class="modal-body" style="overflow:auto; ">
                        <div style="flex-grow:1;">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam officiis tibus impedit.</p>
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary">Guardar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <hr>
    <h1 class="display-1"> Crea navegaciones personalizadas- navs</h1>
    <div class="container py-4">
 <!---       <div class="card">
            <div class="card-body">
            <nav class="nav">
                <a class="nav-link" href="">Enlace 1</a>
                <a class="nav-link" href="">Enlace 2</a>
                <a class="nav-link" href="">Enlace 3</a>
                <a class="nav-link disabled" href="">Enlace 4</a>
            </nav>
            </div>
        </div>-->
        <nav >
            <ul class="nav nav-pills"> <!-- si queremos centro en center y a la derecha end nav justify-content-end usando nav nav-tab o nav-pils si queiro que ocuype todo el menu nav-fill   -->
                <li class="nav-item"><a href="#" class="nav-link  active"> Enlace 1</a></li>
                <li class="nav-item dropdown">
                    <button class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Dropdown</button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="" class="dropdown-item">Enlace 1</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">Enlace 2</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">Enlace 3</a>
                        </li>
                        <li>
                            <a href="" class="dropdown-item">Enlace 4</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item"><a href="#" class="nav-link"> Enlace 4</a></li>
                <li class="nav-item"><a href="#" class="nav-link"> Enlace 2</a></li>
                <li class="nav-item"><a href="#" class="nav-link"> Enlace 3</a></li>
            <ul>
        </nav>

    </div>

    <hr>
    <h1 class="display-1"> Crea navegaciones resonsivo- navs</h1>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#miMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a href="/">
                    <img src="{{ asset('img/logo.png') }}" alt="" height="50">
                </a>
                <div class="collapse navbar-collapse" id="miMenu">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Cursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contáctanos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>



        <hr>
        <hr>
        <hr>
        <hr>

        <div class="container py-4">
            <nav>
                <ul class="pagination justify-content-center">
                    <li class="page-item">
                        <a class="page-link" href="">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">Siguiente</a>
                    </li>
                </ul>

            </nav>

            <nav>
                <ul class="pagination pagination-sm">
                    <li class="page-item">
                        <a class="page-link" href="">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">Siguiente</a>
                    </li>
                </ul>

            </nav>

            <nav>
                <ul class="pagination pagination-lg justify-content-end">
                    <li class="page-item">
                        <a class="page-link" href="">Anterior</a>
                    </li>
                    <li class="page-item active">
                        <a class="page-link" href="">1</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">2</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">3</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">4</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">5</a>
                    </li>
                    <li class="page-item">
                        <a class="page-link" href="">Siguiente</a>
                    </li>
                </ul>

            </nav>
        </div>

        <div class="mb-200px">

        </div>
  

        <hr>
        <hr>
        <hr>
        <hr>
        <!--No funcionan-->
        <h1 class="display-1"> creando popovers</h1>
        <div class="container py-4">

                <button type="button" class="btn btn-lg btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to toggle popover</button>

                <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>

        </div>



        <hr>
        <hr>
        <hr>
        <hr>

        <h1 class="display-1"> Barra progreso</h1>
        <div class="container py-4">
            <div class="progress mb-2">
                <div class="progress-bar bg-danger w-75"><!--se puede usar w-75, 50 o style width:18.75%;-->
                    75%
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar" style="width:18.75%;"><!--se puede usar w-75, 50 o style width:18.75%;-->
                    18.75%
                </div>
            </div>

            <div class="progress">
                <div class="progress-bar progress-bar-striped w-50"><!--se puede usar w-75, 50 o style width:18.75%;-->
                    50%
                </div>
            </div>
        </div>


        <hr>
        <hr>
        <hr>
        <hr>

        <h1 class="display-1">spinner</h1>
        <div class="container py-4">
            <div class="spinner-border text-primary">
                <span class="visually-hidden">Cargando</span>
            </div>

            <div class="spinner-border text-danger">
                <span class="visually-hidden">Cargando</span>
            </div>

            <div class="spinner-border text-warning">
                <span class="visually-hidden">Cargando</span>
            </div>

            <div class="spinner-grow text-info">
                <span class="visually-hidden">Cargando</span>
            </div>

            
            <div class="spinner-grow text-light">
                <span class="visually-hidden">Cargando</span>
            </div>

            
            <div class="spinner-grow text-primary">
                <span class="visually-hidden">Cargando</span>
            </div>

            <div class="d-flex justify-content-center" >
                <div class="spinner-border text-primary" style="width:3rem; height:3rem;">
                    <span class="visually-hidden">Cargando..</span>
                </div>
            </div>    

            <div class="d-flex justify-content-end">
                <div class="spinner-border text-primary">
                    <span class="visually-hidden">Cargando..</span>
                </div>
            </div>  

        </div>


        <hr>
        <hr>
        <hr>
        <hr>

        <h1 class="display-1">Acordeon</h1>
        <div class="container">
            <div class="accordion" id="accordionEjemplo">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                            Acordion Button Nro. 1
                        </button>
                    </h2>
                    <div class="accordion-colapse collapse" id="collapseOne" data-bs-parent="#accordionEjemplo"><!--Esta opcion data-bs-parent es para que se abran de a uno solo y no se puedan abiri los tres-->
                        <div class="acordion-body">
                            Lorem ipsumSi queremos que  se mantenga uno abierto borrar el collapse de la clase|||| onsectetur, nesciunt ea. Qui blanditiis iste cumque iure corrupti error natus.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                            Acordion Button Nro. 2
                        </button>
                    </h2>
                    <div class="accordion-colapse collapse" id="collapseTwo" data-bs-parent="#accordionEjemplo">
                        <div class="acordion-body">
                            Lorem ipsum dolor sit amet,En esta clase le agregamos show |||s officia iusto illum expedita veritatis possimus similique distinctio. Consectetur, nesciunt ea. Qui blanditiis iste cumque iure corrupti error natus.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                            Acordion Button Nro. 3
                        </button>
                    </h2>
                    <div class="accordion-colapse collapse" id="collapseThree" data-bs-parent="#accordionEjemplo">
                        <div class="acordion-body">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis rem perspiciatis officia iusto illum expedita veritatis possimus similique distinctio. Consectetur, nesciunt ea. Qui blanditiis iste cumque iure corrupti error natus.
                        </div>
                    </div>
                </div>
            </div>
        </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script>
        $(function () {
            $('[data-toggle="popover"]').popover()
        })    

        $('#example').popover(options)
</script>


</body>

</html>