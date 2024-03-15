<?php

namespace App\Http\Controllers\Folder;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;

class PageController extends Controller
{
    public function index()
    {
        $table_titles = [
            'Azienda',
            'Stazione di partenza',
            'Stazione di arrivo',
            'Orario di partenza',
            'Orario di arrivo',
            'Codice Treno',
            'Numero Carrozze',
            'In orario',
            'Cancellato'
        ];
        $trains = Train::where('departure_time', '=', '20:36:18')->get();
        return view('welcome', compact('trains', 'table_titles'));
    }
}
