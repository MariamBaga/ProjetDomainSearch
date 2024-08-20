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
  public function Politique()
    {


        return view('homes.Politique');
    }
  public function Condition()
    {


        return view('homes.Termes_Conditions');
    }


   // app/Http/Controllers/DomainController.php




}
