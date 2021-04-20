<?php

namespace App\Http\Controllers;

use App\LocalModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\Flysystem\Adapter\Local;

class LocalController extends Controller
{
    // public function index(){
    public function __invoke()
    {

        $locals = DB::table('Local')->get();
        $title = 'Locales';
        return view('locals', compact('locals', 'title'));

        // return view('locals')
        //     ->with('locals', $locals);


        // return view('locals', [
        //     'locals' => $locals
        // ]);

        // $title = 'Listado de Locales';

        // $locals = 'Mensaje';

        // return view('index', compact('title', 'locals'));

    }

    public function show($idLocal)
    {
        $locals = LocalModel::all();


        $local = $locals->find($idLocal);

        dd($local);

        return view('showlocal', compact('local', 'title', 'idLocal'));
    }
}
