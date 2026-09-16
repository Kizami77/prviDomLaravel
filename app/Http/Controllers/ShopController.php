<?php

namespace App\Http\Controllers;

use App\Models\ProductsModel;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {
        $products = ProductsModel::all();

        return view('shop',compact('products'));
    }

    // prosledi $products u nshop.blade
    // ispisati proizvode pomocu petlje

    // vezba kod iphone17 i iphone16 da pise super snizenje

    // za domaci uvezi novu navigaciju about ,shop ,kontakt
    // saznaj kako se prave migracije i naoravi jednu
    // napravi migraciju za proizvode
     // - napravi model za Products
}
