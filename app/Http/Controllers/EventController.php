<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Elias";
        $idade = 26;
        $arr = [12, 24, 34, 45, 58];
        $arrnames = ['elias', 'ana', 'enzo'];

        return view(
            'welcome',
            [
                'nome' => $nome,
                'idade' => $idade,
                'arr' => $arr,
                'arrnames' => $arrnames
            ]
        );
    }

    public function create() {
        return view('events.create');
    }
}
