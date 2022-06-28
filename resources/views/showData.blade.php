<!DOCTYPE html>
<html>

<head>
    <title>QR code</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>

<body>
    <h1 style="text-align: center">{{ $customer }}</h1>
    <hr>
    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Id</th>
                <th>Product Name</th>
                <th>Weight</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productname as $key=>$prname)
                <tr>
                    <td>{{ $key+1 }} </td>
                    <td>{{ $prname->productname }} </td>
                    <td>{{ $prname->weight }} KG </td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>

                <td colspan="2"><b>Total</b> </td>
                <td> <b>{{$total}} </b></td>
            </tr>
        </tfoot>

    </table>
    <h5>Data & Time : {{$dateTime}} </h5>





</body>

</html>
