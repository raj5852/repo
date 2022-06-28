@extends('layouts.app')

@section('content')
    <h1>Sale Product</h1>
    <hr>
    <div class="row">
        <div class="col-md-7">
            <form action="/sale" method="POST">
                @csrf
                @csrf
                <label for=""><b>Customer : </b> </label>
                <select class="form-control" name="customer" id="">
                    <option value="Rahman-Traders">Rahman-Traders</option>
                    <option value="Kabir-Traders">Kabir-Traders</option>
                </select><br>
                <input type="text" id="scan" class="form-control scan" placeholder="Scan QR code">
                <br><br>
                <div class="card card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Product Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="appendrow">

                        </tbody>


                    </table>
                    <input type="submit" class="btn btn-success" value="Save & Print">

                </div>
            </form>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function() {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $('.scan').on('input', function(e) {


                e.preventDefault();
                var productname = $('.scan').val();
                var i = 0;
                $.ajax({
                    url: '/ajax',
                    method: 'post',
                    data: {
                        productname: productname
                    },
                    success: function(data) {
                        if (data.id) {

                            $('#scan').val(null);
                            $('#appendrow').append(

                                '<tr id="row' + data.id +
                                '"><input type="hidden" name="id[]" value=' +
                                data.id +
                                '> <input type="hidden" name="kg[]" value=' + data.weight +
                                '><td>' + data.productname +
                                '</td><td><button type="button" id='+data.id+' class="btn btn-danger btn-remove">Delete</button></td></tr>'
                            )
                        }

                    }
                })
            })
            $(document).on('click', '.btn-remove', function() {
                var button_id = $(this).attr("id");
                $('#row' + button_id + '').remove();
                console.log('ss')
            })

        })
    </script>
@endsection
