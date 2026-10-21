<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class MainController extends Controller
{
    public function about(): View
    {
        return view('about');
    }

    public function index(): View
    {
        return view('index');
    }

    public function array(): View
    {
        $array1 = [];

        // actual

        $array2 = [];
        $array2[] = 'Juan';
        $array2[] = 'Pepe';
        $array2[] = 'Maria';
        $array2[10] = 'Elisabez';
        $array2[] = 'Paco';
        $array3 = ['Juan', 'Pepe', 'Maria'];

        $alumnos = [
            ['nombre' => 'Ajarif Saika, Fátima', 'edad' => 20],
            ['nombre' => 'Albarrán Joya, Antonio', 'edad' => 21],
            ['nombre' => 'Burgos Tomé, Adrián', 'edad' => 20],
            ['nombre' => 'Carrascosa Delgado, Pablo', 'edad' => 21],
            ['nombre' => 'Castillo García, Joaquín', 'edad' => 19],
            ['nombre' => 'El Issmail Al Assaf, Amara', 'edad' => 21],
            ['nombre' => 'Fernández Álvarez, Adrián', 'edad' => 21],
            ['nombre' => 'Galdón Fernández, Abraham', 'edad' => 21],
            ['nombre' => 'García González, Ignacio', 'edad' => 21],
            ['nombre' => 'García López, Pilar', 'edad' => 21],
            ['nombre' => 'Gorlat Castro, Raúl', 'edad' => 21],
            ['nombre' => 'Hernández Recio, Iván', 'edad' => 21],
            ['nombre' => 'Kordass Rjaf-Allah, Noussayr', 'edad' => 21],
            ['nombre' => 'Maldonado Navarro, Manuel', 'edad' => 21],
            ['nombre' => 'Montero Pelegrina, Pedro', 'edad' => 21],
            ['nombre' => 'Montoro Ruiz, Alba', 'edad' => 21],
            ['nombre' => 'Pérez Montalbán, Christian', 'edad' => 21],
            ['nombre' => 'Sánchez Sorroche, José', 'edad' => 21],
            ['nombre' => 'Serrano Rodríguez, Pablo', 'edad' => 21],
            ['nombre' => 'Vereda Orozco, Gonzalo Jesús', 'edad' => 21],
            ['nombre' => 'Vicaria García, Francisco Javier', 'edad' => 21],
            ['nombre' => 'Vilar Martín, Blas', 'edad' => 21],
            ['nombre' => 'Villegas Rivera, Luis', 'edad' => 21],
        ];
        $grupo = 'Segubdo de Desarollo de Aplicaciones Web A';

        return view('array', ['grupo' => $grupo, 'alumnos' => $alumnos]);

    }

    public function portfolio()
    {

        return view('portfolio');
    }

    /*function aboutMetodo() : View {
        return view('index');

    }*/
}
