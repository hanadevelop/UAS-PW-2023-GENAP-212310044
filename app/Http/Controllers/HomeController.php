<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Dashboard()
    {
        return view('./dashboard/dashboard', [
            "title" => "dashboard", "Data" => Post::all()
            
        ]);
    }

    public function Tiket()
    {
        return view('./pesanan/tiket', [
            "title" => "tiket"
        ]);
    }

    public function Verif()
    {
        return view('/pesanan/verifbio', [
            "title" => "verifbio",
            
            
            
            
        ]);
    }

    public function Pesan(){
        return view('./pesanan/pesan',[
            "title" => "pesan"
        ]);
    }

    
  

}
