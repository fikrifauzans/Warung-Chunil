@extends('layouts.master')
@section('title')
    Ringkasan Stock Of Name
@endsection
@section('contain')

    <div class="container-fluid">
        <div class="row justify-content-between mx-3 my-3">
            <div>
                <strong class="my-3 mx-3 "
                    style="color: goldenrod">{{ $sotProducts->created_at->format('j F Y  ') }}</strong>
            </div>
            <div>
                <a href="/stockofname/download/{{ $sotProducts->id }}"><img src="{{ asset('/home/excel.png') }}"
                        width="20px"></a>
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="card-body border table-responsive p-0 mt-1 shadow">
                <table class=" table table-bordered table-striped table-valign-middle text-center">
                    <style>
                        #profit {
                            background: rgb(95, 255, 95);
                        }

                        #thProfit {
                            color: rgb(197, 168, 0);
                        }

                        table.table-bordered {

                            border: 2px solid rgb(0, 0, 0);
                            font-size: 13px;
                            border-color: black;
                        }

                        .table-responsive {
                            width: 98%;
                        }

                    </style>
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Category</th>
                            <th scope="col">Kuantitas</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Harga Jual</th>
                            <th id="thProfit" scope="col">Keuntungan/pcs</th>
                            <th scope="col">Total Harga Beli</th>
                            <th scope="col">Total Harga Jual</th>
                            <th scope="col">Margin</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sotProducts->stockofnameproducts as $sotProduct)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $sotProduct->name }}</td>
                                <td>{{ $sotProduct->category }}</td>
                                <td>{{ $sotProduct->qty }}</td>
                                <td>{{ $sotProduct->purchase_price }}</td>
                                <td>{{ $sotProduct->selling_price }}</td>
                                <td id="profit">{{ $sotProduct->profit }}</td>
                                <td>{{ $sotProduct->totalpurchaseprice }}</td>
                                <td>{{ $sotProduct->totalsellingprice }}</td>
                                <td>{{ $sotProduct->margin }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
