<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Visitor;
use App\Models\Ponto;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /* public function __construct(){
        $this->middleware('auth');
  } */

    public function index(){

    $visitsCount = 0;
    $onlineCount = 0;
    $pageCount = 0;
    $userCount = 0;    

    //Contagem de Visitantes


      //Contagem de Usuarios Online
    
      $datelimit = date('Y-m-d H:i:s', strtotime('-5 minutes'));
      
  
    //Contagem para o PagePie


    //Contagem de Usuarios 
      $userCount = User::count();
      


    return view('admin.home', [

        'visitsCount' => $visitsCount,
        'onlineCount' => $onlineCount,
      
        'userCount' => $userCount

    ]);
}

}
