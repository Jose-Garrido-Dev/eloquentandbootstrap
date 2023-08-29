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
    <h1 class="display-1"> Alerts</h1>

    <div class="container py-4">
        <div class="alert alert-primary alert-dismissible"> 
            <span>Esta es una alerta primary. <a class="alert-link" href="">Ir al sitio Web</a></span>
            <button class="btn-close"
            data-bs-dismiss="alert"
            aria-label="close"
            ></button>
        </div>

        <div class="alert alert-secondary">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis blanditiis odio molestiae sit recusandae, repudiandae veritatis repellat vero ipsum, obcaecati necessitatibus unde dolorem fuga delectus doloribus iste quas et nemo.</span>
        </div>

        <div class="alert alert-success">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis blanditiis odio molestiae sit recusandae, repudiandae veritatis repellat vero ipsum, obcaecati necessitatibus unde dolorem fuga delectus doloribus iste quas et nemo.</span>
        </div>

        <div class="alert alert-danger">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis blanditiis odio molestiae sit recusandae, repudiandae veritatis repellat vero ipsum, obcaecati necessitatibus unde dolorem fuga delectus doloribus iste quas et nemo.</span>
        </div>

        <div class="alert alert-warning">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis blanditiis odio molestiae sit recusandae, repudiandae veritatis repellat vero ipsum, obcaecati necessitatibus unde dolorem fuga delectus doloribus iste quas et nemo.</span>
        </div>

        <div class="alert alert-info">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis blanditiis odio molestiae sit recusandae, repudiandae veritatis repellat vero ipsum, obcaecati necessitatibus unde dolorem fuga delectus doloribus iste quas et nemo.</span>
        </div>

        <div class="alert alert-light">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis blanditiis odio molestiae sit recusandae, repudiandae veritatis repellat vero ipsum, obcaecati necessitatibus unde dolorem fuga delectus doloribus iste quas et nemo.</span>
        </div>
        <div class="alert alert-dark">
            <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis blanditiis odio molestiae sit recusandae, repudiandae veritatis repellat vero ipsum, obcaecati necessitatibus unde dolorem fuga delectus doloribus iste quas et nemo.</span>
        </div>
    </div>

     <div class="container py-4">
        <h1 class="display-1"> badges- insignias en tus elementos</h1>

        <span class="badge bg-primary">Primary</span>
        <span class="badge bg-secondary">Primary</span>
        <span class="badge bg-success">Primary</span>
        <span class="badge bg-danger">Primary</span>
        <span class="badge bg-warning">Primary</span>
        <span class="badge bg-info">Primary</span>
        <span class="badge bg-light text-dark">light</span>
        <span class="badge bg-dark">dark</span>

        <hr>

        <span class="badge bg-primary rounded-pill">Primary</span>
        <span class="badge bg-secondary rounded-pill">Primary</span>
        <span class="badge bg-success rounded-pill">Primary</span>
        <span class="badge bg-danger rounded-pill">Primary</span>
        <span class="badge bg-warning rounded-pill">Primary</span>
        <span class="badge bg-info rounded-pill">Primary</span>
        <span class="badge bg-light text-dark rounded-pill">light</span>
        <span class="badge bg-dark rounded-pill">dark</span>

        <hr>

        <h1>Encabezado de ejemplo <span class="badge bg-secondary">nuevo</span></h1>
        <h2>Encabezado de ejemplo <span class="badge bg-secondary">nuevo</span></h2>
        <h3>Encabezado de ejemplo <span class="badge bg-secondary">nuevo</span></h3>
        <h4>Encabezado de ejemplo <span class="badge bg-secondary">nuevo</span></h4>
        <h5>Encabezado de ejemplo <span class="badge bg-secondary">nuevo</span></h5>
        <h6>Encabezado de ejemplo <span class="badge bg-secondary">nuevo</span></h6>

        <button class="btn btn-primary">
            Notificaciones <span class="badge bg-danger">5</span>
        </button>
    </div>  

    <div class="container py-4">
        <h1 class="display-1"> Migas de pan-sistema de navegacion facil de seguir</h1>

        <nav aria-label="breadcrumb"><!--Con esta opcion le indicamos al navegador que es una miga de pan arialabel=breadcrumv y con aria.current=page le decimos que esa es la pag actual-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="">Cursos</a></li>
                <li aria-current="page" class="breadcrumb-item active">Bootstrap</li>
            </ol>
        </nav>

    </div>

    <div class="container py-4">
        <h1 class="display-1"> Botones de diferentes estilos</h1>

        <button class="btn btn-primary" >
            primary
        </button>

        <button class="btn btn-secondary" >
            secondary
        </button>

        <button class="btn btn-success" >
            success
        </button>

        <button class="btn btn-danger" >
            primary
        </button>

        <button class="btn btn-info" >
            primary
        </button>

        <button class="btn btn-warning" >
            primary
        </button>

        <button class="btn btn-light" >
            primary
        </button>

        <button class="btn btn-dark" >
            primary
        </button>
        <hr>

        <button class="btn btn-link" href="" >Enlace</button>

        <a class="btn btn-primary" href="">Enlace forma de boton</a>
        
        <input class="btn btn-primary" type="button" type="button" value="Input Submit">


        <hr><hr>

        <button class="btn btn-outline-primary" >
            primary
        </button>

        <button class="btn btn-outline-secondary" >
            secondary
        </button>

        <button class="btn btn-outline-success" >
            success
        </button>

        <button class="btn btn-outline-danger" >
            primary
        </button>

        <button class="btn btn-outline-info" >
            primary
        </button>

        <button class="btn btn-outline-warning" >
            primary
        </button>

        <button class="btn btn-outline-light" >
            primary
        </button>

        <button class="btn btn-outline-dark" >
            primary
        </button>




        <hr>
        <hr>
        <button class="btn btn-primary btn-sm" >
            primary
        </button>

        <button class="btn btn-outline-secondary" >
            secondary
        </button>

        <button class="btn btn-success btn-lg" disabled >
            success
        </button>
        <a class="btn btn-success disabled" >
            success
        </a>

        <div class="d-grid gap-2">
            <button class="btn btn-primary">
                primary
            </button>
            <button class="btn btn-primary active">
                primary
            </button>
        </div>


    </div>


    <div class="container py-4">
        <h1 class="display-1"> Botones por grupo</h1>
        <div class="btn-group">
            <button class="btn btn-primary">Izquierdo</button>
            <button class="btn btn-primary active">Centro</button><!--Funciona como enlaces como tambien en botones-->
            <button class="btn btn-primary">Derecho</button>
        </div>
<hr>
        <div class="btn-group">
            <input class="btn-check" type="checkbox" name="" id="btn-check1">
            <label class="btn btn-outline-primary" for="btn-check1"> Checkbox1</label>

            <input class="btn-check" type="checkbox" name="" id="btn-check2">
            <label class="btn btn-outline-primary" for="btn-check2"> Checkbox2</label>

            <input class="btn-check" type="checkbox" name="" id="btn-check3">
            <label class="btn btn-outline-primary" for="btn-check3"> Checkbox3</label>
        </div>

        <hr>
        <div class="btn-group">
            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio1">
            <label class="btn btn-outline-primary" for="btn-radio1"> Radio1</label>

            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio2">
            <label class="btn btn-outline-primary" for="btn-radio2"> Radio2</label>

            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio3">
            <label class="btn btn-outline-primary" for="btn-radio3"> Radio3</label>
        </div>
<hr>
        <div class="btn-group-sm">
            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio4">
            <label class="btn btn-outline-primary" for="btn-radio4"> Radio1</label>

            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio5">
            <label class="btn btn-outline-primary" for="btn-radio5"> Radio2</label>

            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio6">
            <label class="btn btn-outline-primary" for="btn-radio6"> Radio3</label>
        </div>

        <div class="btn-group-vertical">
            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio7">
            <label class="btn btn-primary" for="btn-radio7"> Radio1</label>

            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio8">
            <label class="btn btn-primary" for="btn-radio8"> Radio2</label>

            <input class="btn-check" type="radio" name="btn-radio" id="btn-radio9">
            <label class="btn btn-primary" for="btn-radio9"> Radio3</label>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>