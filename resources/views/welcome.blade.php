@extends('layouts.app')
@section('content')
<h1>Add product</h1>
<hr>
    <div class="row">
        <div class="col-md-7">
            <div class="card card-body">
                <form action="/store" method="POST">
                    @csrf
                    <label for="">Product</label>
                    <select class="form-control" name="product" id="">
                        <option value="Paper1">Paper1</option>
                        <option value="Paper2">Paper2</option>
                        <option value="Paper2">Paper3</option>
                    </select>
                    <label for="">Size</label>
                    <input class="form-control" type="number" name="size" placeholder="Size-Inch">
                    <label for="">Weight</label>
                    <input class="form-control" type="number" name="weight" placeholder="Weight-KG"><br>
                    <input type="submit" value="Save & Print" class="btn btn-success">
                </form>

            </div>
        </div>
    </div>

@endsection
