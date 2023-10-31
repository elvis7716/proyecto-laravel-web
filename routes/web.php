<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\BD;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('/nueva ruta', function () {
    return view('vistados');
});


Route::get('/lista-personas', [PersonaController::class, 'listaPersona'])
-> name('lista-persona');

Route::get('/lista-personas/{id_persona}',[PersonaController::class,'mostrarPersona'])
-> name('mostrar-persona');
    
    
Route::get('/lista-productos', function(){
    $productos = [
        [
            "productosID" => "1",
            "categoria" => "prenda  de vestir",
            "nombre" => "pantalon",
            "descripcion" => "Lorem Ipsum",
            "precio" => "180.00",
            "stock" => "02",
            "foto" => "https://cdn.icon-icons.com/icons2/1080/PNG/512/track-pant_78056.png",
            "fechaderegistro" => "02/09/2023",
           
            
        ],
        [
            "productosID" => "2",
            "categoria" => "calzados",
            "nombre" => "zapato",
            "descripcion" => "Lorem Ipsum",
            "precio" => "200.00",
            "stock" => "90",
            "foto" => "https://cdn.icon-icons.com/icons2/376/PNG/256/Vans_Paint_37309.png",
            "fechaderegistro" => "02/09/2023",
        ]   ,
        [
            "productosID" => "3",
            "categoria" => "prenda de vestir",
            "nombre" => "polo",
            "descripcion" => "Lorem Ipsum",
            "precio" => "25.00",
            "stock" => "78",
            "foto" => "https://media.istockphoto.com/id/1411678076/es/vector/camiseta-icon.jpg?s=2048x2048&w=is&k=20&c=nkfPkTBezSxIN1bAtOfpFqrJmSnMOlIWsWNyaTSbF_I=",
            "fechaderegistro" => "02/09/2023",
        ],
        [
            "productosID" => "4",
            "categoria" => "calzados",
            "nombre" => "ojota",
            "descripcion" => "Lorem Ipsum",
            "precio" => "10.00",
            "stock" => "80",
            "foto" => "https://cdn.icon-icons.com/icons2/520/PNG/512/Horse-shoe_icon-icons.com_52059.png",
            "fechaderegistro" => "02/09/2023",
        ],
        [
            "productosID" => "5",
            "categoria" => "peluches",
            "nombre" => "oso",
            "descripcion" => "buena",
            "precio" => "80.00",
            "stock" => "40",
            "foto" => "https://media.istockphoto.com/id/1314216010/es/vector/ilustraci%C3%B3n-de-un-divertido-juguete-teddy-bear-con-sombras-de-textura.jpg?s=2048x2048&w=is&k=20&c=fVEvUg_-57qM0mtGBZEW7KrEgLizVb70abIMYFB37w4=",
            "fechaderegistro" => "02/09/2023",
        ],
        [
            "productosID" => "6",
            "categoria" => "computadoras portatiles",
            "nombre" => "laptop",
            "descripcion" => "buena",
            "precio" => "5000.00",
            "stock" => "25",
            "foto" => "https://cdn.icon-icons.com/icons2/476/PNG/256/laptop_46930.png",
            "fechaderegistro" => "02/09/2023",
        ]

        ];

       
    return view('lista-productos', compact ('productos'));
});

