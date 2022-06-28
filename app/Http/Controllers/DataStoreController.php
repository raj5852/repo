<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;
use PDF;

class DataStoreController extends Controller
{
    //
    function index(Request $request){
        $request->validate([
            'product'=>'required',
            'size'=>'required',
            'weight'=>'required'
        ]);

        $randQR  = rand(1000,3000);
        $productname = $request->product;
        $size = $request->size;
        $weight = $request->weight;

        $store = new Store();
        $store->productid = $randQR;
        $store->productname = $productname;
        $store->size = $size;
        $store->weight = $weight;
        $store->save();
        $data = [
            'name'=> $productname,
            'size'=> $size,
            'weight' => $weight,
            'randQR'=>$randQR,
            'dateTime'=>date("F j, Y, g:i a"),
            'a'=>'<img style="text-align: center" src="https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl='.$randQR.'" alt="">'


        ];
        $pdf = PDF::loadView('QRpdf', $data);

        return $pdf->stream();



    }
    function ajax(Request $request){
        $find =  Store::where('productid',$request->productname)->first();
        return response()->json($find);
    }

}
