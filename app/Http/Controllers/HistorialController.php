<?php

namespace App\Http\Controllers;

use App\Models\Historial;
use Illuminate\Http\Request;

class HistorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
      //
    
    public function showall(){
        $historial =  Historial::orderBy('created_at', 'desc')->get();;
        return $historial;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        //
        $historial = new Historial();
        $historial->nombre = $request->nombre;
        $historial->temperatura = $request->temperatura;
        $historial->humedad = $request->humedad;
        $historial->save();
    }

    
}
