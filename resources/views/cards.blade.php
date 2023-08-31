
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
    <h1 class="display-1">Cards</h1>
    <div class="container py-4">
        <div class="card "  style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2023/08/19/05/50/wolf-8199785_1280.png" alt=""> <!--si quisiera agregar abajo la img tendria que poner clase card-img-bottom-->
            <div class="card-body">
                <h1 class="h5 card-title">Card title</h1>
                <h2 class="h6 card-subtitle text-muted mb-2">Card Subtitle</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero labore architecto corrupti distinctio possimus aperiam neque natus deserunt dolores 
                    voluptatem, aut obcaecati ut temporibus facere nam laudantium assumenda dolorum? At.</p>
            </div>
        </div>
    </div>

<hr><hr>
    <h1 class="display-1">Listas de elementos agrupados</h1>
    <div class="container py-4">
        <div class="card "  style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2023/08/19/05/50/wolf-8199785_1280.png" alt=""> <!--si quisiera agregar abajo la img tendria que poner clase card-img-bottom-->
            <div class="card-body">
                <h1 class="h5 card-title">Card title</h1>
                <h2 class="h6 card-subtitle text-muted mb-2">Card Subtitle</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero labore architecto corrupti distinctio possimus aperiam neque natus deserunt dolores 
                    voluptatem, aut obcaecati ut temporibus facere nam laudantium assumenda dolorum? At.</p>
 
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Primer Elemento</li>
                    <li class="list-group-item">Segundo Elemento</li>
                    <li class="list-group-item">Tercer Elemento</li>
                </ul>
            </div>
        </div>
    </div>


    <hr><hr><hr>
    <h1 class="display-1">Card Header y card Footer</h1>
    <div class="container py-4">
        <article class="card ">
            <h1 class="h4 card-header">
                Esta es una cabezera
            </h1>
            <div class="card-body">
                <h1 class="h5 cad-title">Card Title</h1>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aut odio aperiam recusandae atque amet, adipisci, alias labore sed ex fugiat cupiditate quis? Nulla pariatur modi eaque fugit molestiae amet aperiam.</p>
            </div>
            <footer class="card-footer">
                Aqui puede ir contenido adicional
            </footer>
        </article>
    </div>

    <hr><hr><hr>
    <h1 class="display-1">Cards Link</h1>
    <div class="container py-4">
        <div class="card "  style="width: 18rem;">
            <img class="card-img-top" src="https://cdn.pixabay.com/photo/2023/08/19/05/50/wolf-8199785_1280.png" alt=""> <!--si quisiera agregar abajo la img tendria que poner clase card-img-bottom-->
            <div class="card-body">
                <h1 class="h5 card-title">Card title</h1>
                <h2 class="h6 card-subtitle text-muted mb-2">Card Subtitle</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero labore architecto corrupti distinctio possimus aperiam neque natus deserunt dolores 
                    voluptatem, aut obcaecati ut temporibus facere nam laudantium assumenda dolorum? At.</p>
                    <a href="card-link">Enlace #1</a>
                    <a href="card-link">Enlace #2</a>
            </div>
        </div>
    </div>


    <hr><hr><hr>
    <h1 class="display-1">Image Overlay</h1>
    <div class="container py-4">
        <div class="card text-white"  style="width: 36rem;">
            <img class="card-img" src="https://cdn.pixabay.com/photo/2023/08/19/05/50/wolf-8199785_1280.png" alt=""> <!--si quisiera agregar abajo la img tendria que poner clase card-img-bottom-->
            <div class="card-img-overlay">
                <h1 class="h5 card-title">Card title</h1>
                <h2 class="h6 card-subtitle mb-2">Card Subtitle</h2>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero labore architecto corrupti distinctio possimus aperiam neque natus deserunt dolores 
                    voluptatem, aut obcaecati ut temporibus facere nam laudantium assumenda dolorum? At.</p>
                    <a href="card-link">Enlace #1</a>
                    <a href="card-link">Enlace #2</a>
            </div>
        </div>
    </div>


    <hr><hr><hr>
    <h1 class="display-1">card horizontal</h1>
    <div class="container py-4">
        <div class="card"  style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-4">
                    <img class="img-fluid rounded-start" src="https://cdn.pixabay.com/photo/2023/08/19/05/50/wolf-8199785_1280.png" alt="">
                </div>
                <div class="col-8">
                    <div class="card-body">
                        <h1 class="h5 card-title">Card title</h1>
                        <h2 class="h6 card-subtitle mb-2">Card Subtitle</h2>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero labore architecto corrupti distinctio possimus aperiam neque natus deserunt dolores 
                            voluptatem, aut obcaecati ut temporibus facere nam laudantium assumenda dolorum? At.</p>
                            <a href="card-link">Enlace #1</a>
                            <a href="card-link">Enlace #2</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>