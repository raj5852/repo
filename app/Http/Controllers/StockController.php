<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StockController extends Controller
{
    //
    function index()
    {
        $datas = Store::all();
        $total = $datas->sum('weight');
        return view('stock',compact('datas','total'));
    }
}
