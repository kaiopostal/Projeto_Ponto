<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ponto;
use PDF;

class PdfController extends Controller
{
    public function geraPdf(){
        $ponto = Ponto::all();
        
       
    }
}
