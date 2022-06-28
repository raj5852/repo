@extends('layouts.app')
@section('content')
<h1 class="text-center">Stock</h1>
<hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SL</th>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Size</th>
                <th>Weight</th>
                <th>Date & Tme</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $key=>$data)
            <tr>
                <td>{{ $key+1 }} </td>
                <td>{{ $data->productid }} </td>
                <td>{{ $data->productname }} </td>
                <td>{{ $data->size }} </td>
                <td>{{ $data->weight }} </td>
                <td>{{ $data->created_at }} </td>
            </tr>

            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td> </td>
                <td> </td>
                <td> <b>Total</b> </td>
                <td> </td>
                <td><b>{{$total}} </b></td>
                <td> </td>
            </tr>
        </tfoot>


    </table>
@endsection
