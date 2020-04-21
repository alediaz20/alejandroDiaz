<?php
	$portfolio = [
	['title' => 'Proyecto #1'],
	['title' => 'Proyecto #2'],
	['title' => 'Proyecto #3'],
	['title' => 'Proyecto #4'],
	];


Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/contacto','contacto')->name('contacto');
Route::view('/portfolio','portfolio', compact('portfolio'))->name('portfolio');



Route::get('/prueba', function () {
    return view ('prueba');
});




// Route::get('/', function(){
//	return "Hola desde la pagina de inicio";
// });

// Route::get('contacto', function(){
 //return "Hola desde la pagina de contacto";
// });

// Route::get()
//Route::post() //para acciones "POST"

