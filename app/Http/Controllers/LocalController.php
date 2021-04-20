<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocalController extends Controller
{
    // public function index(){
    public function __invoke()
    {

        if (request()->has('empty')) {
            $locals = [];
        } else {
            $locals = [
                'Banana',
                'Potaxio',
                'Marango'
            ];
        }
        return view('locals', compact('locals'));

        // return view('locals')
        //     ->with('locals', $locals);


        // return view('locals', [
        //     'locals' => $locals
        // ]);

        // $title = 'Listado de Locales';

        // $locals = 'Mensaje';

        // return view('index', compact('title', 'locals'));

    }
}
