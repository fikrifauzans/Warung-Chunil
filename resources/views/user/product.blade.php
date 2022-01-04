@extends('layouts.master')
@section('contain')
    @if ($products->isEmpty())
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

                background-size: cover;
                height: 400px;

            }

            #jumbo-bg {
                background: rgba(255, 255, 255, 0.712);
                height: 100%;


            }

            #btn-jm {
                width: 30%;
                font-size: 18px;
            }

            .display-4 {
                margin-top: 40px;
                font-size: 40px;
                margin-bottom: 20px;
            }

            #rounded {
                border-radius: 10px;
            }

        </style>


        <div class="container">
            <div class="row justify-content-center ">

                    <div id="rounded" class="col-lg-9 jumbotron jumbotron-fluid bg-warning  shadow">
                        <div class="container d-flex flex-column d-flex justify-content-start" id="jumbo-bg">
                            <h1 class="display-4">Maaf, anda belum memiliki produk</h1>
                            <p class="lead">Silahkan tambah produk untuk memulai list</p>
                            <a href="/product/create" id="btn-jm"
                                class="align-self-center btn btn-danger btn-lg btn-block">Tambah Produk</a>

                        </div>

                </div>
            </div>
        </div>
    @else

        <!-- ./wrapper -->
        <div class="container-fluid  mx-1 mt-3">
            <div class="row justify-content-between align-items-center">
                @section('title')
                    List Product
                @endsection
                <a href="/product/create" class="btn btn-primary my-3 float-left float-right"> <span
                        class=' fas fa-plus-square'></span> Tambah Produk</a>
            </div>

            <div class="card-body border shadow-sm table-responsive p-0">
                <table class="table table-bordered table-striped table-valign-middle text-center">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga Beli</th>
                            <th scope="col">Harga Jual</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->purchase_price }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td>
                                    <form action="product/delete/{{ $product->id }}" method="post">
                                        <a class="btn btn-secondary px-2 py-2"
                                            href="/product/update/{{ $product->id }}"><i class="far fa-edit"></i>
                                            <small class="">Edit</small></a>
                                        <button class="btn btn-danger px-2 py-2"><i class="fas fa-trash-alt"></i>
                                            <small>hapus</small></button>
                                        @csrf
                                        @method('delete')
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>

    @endif

@endsection
