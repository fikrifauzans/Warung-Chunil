@extends('layouts.master')
@section('contain')

    @if ($products->isEmpty())
        @if (Request::old('search'))

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
                            <h1 class="display-4">Maaf, produk {{ Request::old('search') }} tidak ditemukan</h1>
                            <p class="lead">Silahkan tambah produk untuk memulai list</p>
                            <a href="/product" id="btn-jm"
                                class="align-self-center btn btn-danger btn-lg btn-block">Kembali</a>

                        </div>

                    </div>
                </div>
            </div>

        @else
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
        @endif
    @else


        <!-- ./wrapper -->
        <div class="container-fluid  mx-1 mt-3">
            <div class="row justify-content-between align-items-center">
                @section('title')
                    List Product
                @endsection
            </div>

            <div class="container">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="add-product">
                        <a href="/product/create" class="btn btn-success my-3 float-left float-right">
                            <span class=' fas fa-plus-square'></span> Tambah Produk</a>
                    </div>

                    <div class="search d-flex align-items-center ">
                        @if (Request::old('search') ?? '')
                            <a class="" href="/product"><i
                                    class="mr-1 bg-danger p-2 rounded-circle far fa-times-circle"></i></a>
                        @endif
                        <nav class="navbar navbar-light bg-light">
                            <form class="form-inline" action="/product" method="get">
                                <input value="{{ Request::old('search') }}" class="form-control mr-sm-2" name="search"
                                    type="search" placeholder="Cari produk" aria-label="Search">
                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
                            </form>
                        </nav>
                    </div>
                </div>
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
                                <th scope="row">{{ $products->firstItem() + $loop->index }}</th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->category->name }}</td>
                                <td>{{ $product->purchase_price }}</td>
                                <td>{{ $product->selling_price }}</td>
                                <td>
                                    <ul class="d-inline-block">
                                        <li class="d-inline-block">
                                            <a class="text-warning" href="/product/update/{{ $product->id }}"><i
                                                class="p-1 rounded  far fa-edit"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline-block">
                                    <form action="product/delete/{{ $product->id }}" method="post">
                                        <button id="button-del" class=" list-unstyled"><i class="text-danger p-1 rounded fas fa-trash-alt"></i>
                                        </button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                    <style>
                                        #button-del {
                                            background: none;
                                            color: inherit;
                                            border: none;
                                            padding: 0;
                                            font: inherit;
                                            cursor: pointer;
                                            outline: inherit;
                                        }

                                    </style>
                                            </li>
                                    </ul>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex justify-content-center my-3">
                    <div class="">

                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
        </div>

    @endif

@endsection
