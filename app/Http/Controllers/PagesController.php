<?php

namespace App\Http\Controllers;




class PagesController extends Controller
{
    public function contact()
    {
        $header = 'to jest naglowek storny Kontakt ELO ';
        $date = '20.02.2021';
        $visited = 3450;
        return view('pages.contact', compact ('header', 'date','visited'));
    }
    public function about()
    {
        return view('pages.about');
    }
    
}

