<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Profile;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
  //  $user = User::find(1);// si no se siguen las convenciones la llave primaria se llama de otra manera hay que especificar el nomre de cada uno
    //return $user->profile;// con esto me retorna el perfil y la relacion asociada al ausuario || eloquent esperaria que la llave primaria de users sea id y la llave foranea de profile sea user_id
    $profile = Profile::find(1);
    return $profile->user;



    
});

Route::get('/content',[HomeController::class,'content'] );
Route::get('/form',[HomeController::class,'form'] );
Route::get('/components',[HomeController::class,'components'] );
Route::get('/cards',[HomeController::class,'cards'] );
Route::get('/componentsII',[HomeController::class,'componentsII'] );
