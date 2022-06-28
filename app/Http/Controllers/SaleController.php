<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use PDF;

class SaleController extends Controller
{
    //
    function index(Request $request)
    {

        $idValue = Store::findMany($request->id);
        $customer = $request->customer;
        $data = [
            'productname'=>$idValue,
            'customer'=>$customer,
            'dateTime'=>date("F j, Y, g:i a"),
            'total'=>$idValue->sum('weight')
        ];

        $pdf = PDF::loadView('showData', $data);

        return $pdf->stream();



    }
}
