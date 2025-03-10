<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Apps;
use Illuminate\Http\Request;

class AplicacionController extends Controller
{
    public function getApplications()
    {
        $aplicaciones = Apps::all();

        return response()->json([
            'data'=> $aplicaciones
        ]);
    }
}
