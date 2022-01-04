@extends('layouts.master')
@section('title')
    Create Stock Of Name
@endsection
@section('contain')

@if ($products->isEmpty() === true)
<style>
    table {
        font-size: 14px
    }

    .far,
    .fas {
        font-size: 13px;
    }


    .jumbotron-fluid {

        text-align: center;
        justify-content: center;
        width: 95%;
        background-image: url(https://images.unsplash.com/photo-1544018566-c5741ecd98ad?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=2671&q=80);
        background-size: cover;
        height: 400px;

    }

    #jumbo-bg {
        background: rgba(255, 255, 255, 0.712);
        height: 100%;


    }

    #btn-jm {
        width:30%;
        font-size: 18px;
    }

    .display-4 {
        margin-top:40px;
        font-size: 40px;
        margin-bottom: 20px;
    }
    #rounded {
        border-radius: 10px;
    }
</style>


    <div class="container">
        <div class="row justify-content-center">
            <div id="rounded" class="jumbotron col-lg-9 jumbotron-fluid  shadow">
                <div class="container d-flex flex-column d-flex justify-content-start" id="jumbo-bg">
                    <h1 class="display-4">Maaf, Anda belum memiliki produk</h1>
                    <p class="lead">Tambahkan produk untuk memulai stock of name</p>
                    <a href="/product/create" id="btn-jm" class="align-self-center btn btn-danger btn-lg btn-block">Tambah Produk</a>

                </div>
            </div>
        </div>
    </div>
@else
    <div class="row justify-content-start">
        <div class="col-12">
            <div class="card-body border shadow-sm shadow-sm table-responsive p-0 ">
                <table class="table table-bordered table-striped table-valign-middle text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Jumlah</th>
                        </tr>
                    </thead>
                    <form action="/stockofname/post" method="POST">@csrf
                        <tbody>
                            @foreach ($products as $product)
                                <tr>
                                    <td scope="row">{{ $loop->iteration }}</td>
                                    <td>{{ $product->name }} <input name="name[]" value="{{ $product->name }}"
                                            type="hidden"></td>
                                    <td>{{ $product->category->name }} <input name="category[]"
                                            value="{{ $product->category->name }}" type="hidden"></td>
                                    <td>
                                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                                        <!-- Change the `data-field` of buttons and `name` of input field's for multiple plus minus buttons-->
                                        <div class="form-row justify-content-center">
                                            <div class="col-sm-2">
                                                <input name="qty[]" type="number" class="form-control">
                                            </div>

                                    </td>
                                </tr>
                                <input name="purchase_price[]" value="{{ $product->purchase_price }}" type="hidden">
                                <input name="selling_price[]" value="{{ $product->selling_price }}" type="hidden">
                            @endforeach
                            <input type="hidden" name="date" value="{{ date('d/m/y') }}">
                        </tbody>
                </table>


            </div>
        </div>
    </div>

    <div class="container-fluid mt-3">
        <div class="row justify-content-end">
            <div class="col-lg-2 text-center">
                <button type="submit" class="px-2 shadow btn btn-success align-center w-100">Input</button>
            </div>
        </div>
    </div>
    </form>

        <script>
            const confirm () = {
                confirm('Yakin akan di hapus?')
            }
        </script>
    @endif
@endsection
