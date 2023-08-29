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
    <hr>
    <h1 class="display-1"> Formularios</h1>
    <div class="container">
        <form action="">
            <div class="mb-3">
                <label class="form-label" for="name" >Nombre:</label><br/> <!--clases form-control-lg es para el input maa grande-->
                <input placeholder="por favor ingrese el nombre" class="form-control form-control-lg" type="text" name="name" id="name" disabled>
            </div>
            <div class="mb-3 row">
                <label class="col-form-label col-2" for="email" >Email:</label><br/><!--form-control-sm es para el input maa chico disabled reasonly ees solo lecturs-->
                <div class="col-10">
                    <input value="josegarrido@mail.cl" disabled readonly class="form-control-plaintext" type="text" name="email" id="email" >
                </div>
                
            </div>
            <div class="mb-3">
                <label class="form-label" for="description" >Descripción:</label><br/>
                <textarea placeholder="por favor escriba una breve descripción.." class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
            </div>
        </form>
        <h1 class="display-3"> Deshabilitando formularios</h1>
        <h3>para deshabilitar un formulario debe utilizar atributo disabled</h3>
    </div>
    <hr>
    <h1 class="display-1"> Formularios responsivo</h1>
    <div class="container">
        <form action="">
                <div class="row py-4">
                    <div class="col-auto">
                        <input type="email" class="form-control" placeholder="Ingrese su email" name="" id="">
                    </div>
                    <div class="col-auto">
                        <input type="password" class="form-control" placeholder="Ingrese su password" name="" id="">
                    </div>
                    <div class="col-auto">
                        <button class="btn btn-info" type="submit">Confirmar identidad</button>
                    </div>
                </div>
        </form>
    </div>

    <hr>
    <h1 class="display-1"> Archivos de entrada</h1>
    <div class="container py-4">
        <form action="">
                <div class="mb-3">
                    <label class="form-label" for="formFile">Input file predeterminado</label>
                    <input class="form-control" type="file" name="formFile" id="formFile" >
                </div>

                <div class="mb-3">
                    <label class="form-label" for="formFileMultiple">Input file multiple</label>
                    <input class="form-control" type="file" name="formFile" id="formFileMultiple" multiple >
                </div>
                <div class="mb-3">
                    <label class="form-label" for="formFileMultiple">Input filedeshabilitado</label>
                    <input class="form-control" type="file" name="formFile" id="formFileMultiple"disabled >
                </div>

                <div class="mb-3">
                    <label class="form-label" for="formFile">Input file lg</label>
                    <input class="form-control form-control-lg" type="file" name="formFile" id="formFile" >
                </div>

                <div class="mb-3">
                    <label class="form-label" for="formFile">Input file sm</label>
                    <input class="form-control form-control-sm" type="file" name="formFile" id="formFile" >
                </div>
        </form>

        <hr>
        <h1 class="display-1"> Personalizando campos de distinto color</h1>
        <div class="container py-4">
            <form action="">
                    <label class="form-label" for="">Selector de color</label>
                    <input class="form-control form-control-color" value="#58367D" type="color" id="colorInput">

            </form>
    </div>

    <hr>
    <h1 class="display-1"> Listas personalizadas</h1>
    <div class="container py-4">
        <form action="">
            <select class="form-select mb-3" name="" id="">
                <option value="1">UNO</option>
                <option value="2">DOS</option>
                <option value="3">TRES</option>
                <option value="4">CUATRO</option>
                <option value="5">CINCO</option>

            </select>

            <select class="form-select form-select-lg mb-3" name="" id="">
                <option value="1">UNO</option>
                <option value="2">DOS</option>
                <option value="3">TRES</option>
                <option value="4">CUATRO</option>
                <option value="5">CINCO</option>

            </select>

            <select class="form-select form-select-sm mb-3" name="" id="">
                <option value="1">UNO</option>
                <option value="2">DOS</option>
                <option value="3">TRES</option>
                <option value="4">CUATRO</option>
                <option value="5">CINCO</option>

            </select>

            <select multiple class="form-select form-select-sm mb-3" name="" id="">
                <option value="1">UNO</option>
                <option value="2">DOS</option>
                <option value="3">TRES</option>
                <option value="4">CUATRO</option>
                <option value="5">CINCO</option>

            </select>

        </form>


        <hr>
        <h1 class="display-1"> Agrega botones de selección de formularios</h1>
        <div class="container py-4">

            <h1>Checkbox y radio</h1>


            <h2>Checkbox</h2>
            
            <form action="">
                <div>
                    <input class="form-check-input" type="checkbox" name="" id="checkbox1">
                    <label class="fomr-label" for="checkbox1">Input de tipo checkbox</label>
                </div>

                <div>
                    <input checked class="form-check-input" type="checkbox" name="" id="checkbox2">
                    <label class="fomr-label" for="checkbox2">Input de tipo checkbox 2</label>
                </div>

                <div>
                    <input class="form-check-input" type="checkbox" name="" id="checkbox3" disabled>
                    <label class="fomr-label" for="checkbox3">Input de tipo checkbox 3</label>
                </div>

            </form>

            <h2>radio</h2>
            <form action="">

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prueba" id="radio1" checked>
                    <label class="form-check-label" for="radio1">Input tipo radio 1</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prueba" id="radio2">
                    <label class="form-check-label" for="radio2">Input tipo radio 2</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="prueba" id="radio3" disabled>
                    <label class="form-check-label" for="radio3">Input tipo radio 2</label>
                </div>
            </form>


        </div>



</div>

<hr>
<h1 class="display-1"> grupos de entrada formularios personalizados</h1>
<div class="container py-4">
    <div class="input-group mb-3">
        <span class="input-group-text">#</span>
        <input type="text" class="form-control" placeholder="Nombre de usuario">
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nombre de usuario">
        <span class="input-group-text">#</span>
    </div>

    <div class="input-group mb-3">
        <span class="input-group-text">#</span>
        <input type="text" class="form-control" placeholder="Nombre de usuario">
    </div>

    <div class="input-group mb-3">

        <textarea class="form-control" id="" cols="30" rows="10"></textarea>
    </div>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Nombre de usuario">
        <button class="btn btn-primary">Botón buscadort</button>
    </div>
    



</div>
</body>
</html>
