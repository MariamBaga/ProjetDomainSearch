<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\DomainPrice;

class PriceController extends Controller
{
    //


        public function index()
        {

            $domainPrices =DomainPrice::all();
            return view('Price.pricing', compact('domainPrices'));
        }

}
