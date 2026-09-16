<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class HomepageController extends Controller
{
    public function index()
    {

        //1. napravi varijablu sat da vrati koliko je sati
        // 2.prosledi taj podatak u blade
        $sat = date('H');
        $trenutnoVreme = date("h:i:s");
        return view('welcome', compact('trenutnoVreme', 'sat'));

        // === DOMAĆI ZADATAK: IZVUCI POSLEDNJIH 6 PROIZVODA IZ BAZE ===
        // latest() sortira proizvode tako da najnoviji budu prvi (po datumu 'created_at')
        // take(6) uzima tačno 6 proizvoda
        // get() pokreće upit i uzima podatke iz baze podataka
        $products = ProductModel::orderByDesc("id")
            ->take(6)
            ->get();
       dd($poslednjiProizvodi);
        // === SLANJE SVIH PODATAKA U BLADE ===
        // Sve promenljive koje ti trebaju na stranici samo dodaš unutar compact() odvojene zarezom
        return view('welcome', compact('trenutnoVreme', 'sat', 'products'));
    }


}

