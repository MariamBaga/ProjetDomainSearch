<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\DomainPrice;

class HomeController extends Controller
{
    //
    public function index()
    {

        $domainPrices =DomainPrice::all();
        return view('homes.index', compact('domainPrices'));
    }


   // app/Http/Controllers/DomainController.php




}
