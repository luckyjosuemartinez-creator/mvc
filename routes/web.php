<?php

use Lib\Route;

Route::get('/',funcion () {
    return [
        'title' => 'Home'
        'content' => 'hola desde la pagina de inicio'
    ]
})

Route::get('/', function () {
    return 'hola desde la página principal';
});

Route::get('/contact', function () {
    return 'hola desde la página de contacto';
});

Route::get('/about', function () {
    return 'hola desde la página acerca de';
});    

Route::get('/courses/:slug', function (slug) {
    return 'El curso es: ' . $slug;
}); 

// /courses/php

Route:: dispatch();