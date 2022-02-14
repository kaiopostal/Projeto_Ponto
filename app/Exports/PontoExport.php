<?php

namespace App\Exports;

use App\Models\Ponto;
use Maatwebsite\Excel\Concerns\FromView;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Illuminate\Support\Facades\Auth;


class PontoExport implements FromView, ShouldAutoSize
{
    use Exportable;

    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        $loggedId = intval(Auth::id());
        $pontos = Ponto::select('*')->where('idUser', $loggedId)->get();
        $pontos->each(function($ponto){
            $date = strtotime($ponto->datas);
            $time = strtotime($ponto->ponto1);
            $time2 = strtotime($ponto->ponto2);
            $time3 = strtotime($ponto->ponto3);
            $time4 = strtotime($ponto->ponto4);
            
            $ponto->datas = date('d/m/Y', $date);
            $ponto->ponto1 = date('H:i:s', $time);
            $ponto->ponto2 = date('H:i:s', $time2);
            $ponto->ponto3 = date('H:i:s', $time3);
            $ponto->ponto4 = date('H:i:s', $time4);

            
       });

        return view('admin.exports.pontos',[
            'pontos' => $pontos
    ]);
        
    }
}

