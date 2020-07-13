<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
se trata de pasar por parametro la RUTA y la Funcion
*/


Route::view("/","home")->name("home");
Route::view("/about","about")->name("about");
Route::view("/contact","contact")->name("contact");
Route::post("/contact","ContactController@store")->name("contact.store");
//Route::view("/portfolio","portfolio")->name("portfolio");
/*
Route::get("/portfolio","ProjectController@index" )->name("project.index");
Route::get("/portfolio/crear","ProjectController@create")->name("project.create"); //EL ORDEN DE LAS RUTAS SON IMPORTANTES..PRIMERO LOS CREAR Y DEBAJO LOS DE BUSCAR ELEMENTOS
Route::post("/portfolio","ProjectController@store")->name("project.store");
Route::patch("/portfolio/{project}","ProjectController@update")->name("project.update");
Route::get("/portfolio/{project}","ProjectController@show")->name("project.show");
Route::get("/portfolio/{project}/editar","ProjectController@edit")->name("project.edit");
Route::delete("/portfolio/{project}","ProjectController@destroy")->name("project.destroy");
*/
Route::resource("project","ProjectController")->names("project");
//-----------------------------
//si queremos pasar parametros OBLIGATORIO, como el nombre del usuario:
//Route::get('inicio/{nombre},function($nombre){
//	return "hola" .$nombre;
//});
//-----------------------------
//-----------------------------
//si queremos pasar parametros OPCIONAL, como el nombre del usuario:
//Route::get('inicio/{nombre?},function($nombre=" "){
//	return "hola" .$nombre;
//});
//------------------------
//-----------------------------
//RUTAS CON NOMBRE
//le damos un nombre a la ruta y cuando queramos usarla solo debemos llamarla por su nombre
//primer poner el nombre a la ruta
//Route::get('inicio/{nombre},function($nombre){
//	return "hola" .$nombre;
//})->name("nombreFuncion");
//ahora llamamos a la ruta con la funcion ROUTE y le pasamos por parametro el nombre de la funcion
//Route::get('/', function () {
 //   <a href=" .route('nombreFuncion') . "> pincha</a>
//});
//------------------------
//-----------------------------
//ENVIAR UNA VARIABLE A OTRA PAGINA
//Route::get('/', function () {
//	$nombre="marcos";
//    return view('home')->with("nombre",$nombre);
//})->name("inicio");
//...y para llamarla usamos 
//  <?php echo $nombre>
//  OTRA FORMA DE HACERLO CON ARRAY...
//Route::get('/', function () {
//	$nombre="marcos";
//    return view('home', ["nombre=> $nombre]);
//})->name("inicio");
//------------------------
// ESTRUCTURA DE CONTROL CO BLADE

Auth::routes(["register"=>false]);


