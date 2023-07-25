<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function Konservasi()
    {
        return view('./artikel/konservasi', [
            "title" => "konservasi"
        ]);
    }

    public function Bebek()
    {
        return view('./artikel/bebek');
    }

    public function Kano()
    {
        return view('./artikel/kano');
    }

    public function Profile()
    {
        return view('profile');
    }
}
