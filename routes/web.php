<?php

//aprendible.com = Route::get('/', function)
//aprendible.com/contacto = Route::get('contacto', function)




//RUTAS CON PARAMETROS..
//Route::get('saludo/{nombre?}', function($nombre = "Invitado"){
//	return "Saludos " . $nombre ;
//});

//RUTAS CON NOMBRE
Route::get('/', function(){
	return "Seccion de contactos";

})name('contactos');

Route::get('/', function(){
	echo "<a href='" . route('contactos') . "'>Contactos 1</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 2</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 3</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 4</a><br>";
	echo "<a href='" . route('contactos') . "'>Contactos 5</a><br>";
});



// Route::get('/', function(){
//	return "Hola desde la pagina de inicio";
// });

// Route::get('contacto', function(){
 //return "Hola desde la pagina de contacto";
// });

// Route::get()
//Route::post() //para acciones "POST"

