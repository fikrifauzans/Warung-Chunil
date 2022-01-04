@extends('layouts.master')
@section('title')
    Stock Of Name
@endsection




@section('contain')
@if ($stockofname->isEmpty())
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
                    <h1 style="font-size: 40px" class="display-4">Maaf, Anda belum membuat Stock Of Name</h1>
                    <p class="lead">Tambahkan produk untuk memulai stock of name</p>
                    <a href="/product/create" id="btn-jm" class="align-self-center btn btn-danger btn-lg btn-block">Tambah Produk</a>

                </div>
            </div>
        </div>
    </div>
@else


        <style>
            #btn-del {
                background: none;
                color: inherit;
                border: none;
                padding: 0;
                font: inherit;
                cursor: pointer;
                outline: inherit;
            }
            }

        </style>
        <div class="container mx-3">
            <div class="row">
                @foreach ($stockofname as $sot)
                    <div class="col-lg-3 card text-white bg-dark mx-2 my-3 pb-3 pt-2" style="max-width: 16rem;">
                        <div class="mt-2  d-flex justify-content-between ">
                            <div>
                                <h5 class="text-warning ml-3">{{ $sot->created_at->format('j F Y  ') }}</h5>
                            </div>
                            <div>
                                <form action="/stockofname/delete/{{ $sot->id }}" method="post">@csrf
                                    <button type="submit" id="btn-del"><i
                                            class="bg-danger p-1 align-self-start rounded fas fa-trash-alt"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="card-body">

                            <p class="card-text">Ringkasan Stock Of Name pada tanggal
                                {{ $sot->created_at->format('j F Y  ') }} pada pukul
                                {{ $sot->created_at->format('h:i:s') }} </p>
                            <small>{{ $sot->created_at->diffforhumans() }}</small>
                        </div>
                        <form action="/stockofname/post/{{ $sot->id }}">
                            <button type="submit" class="btn btn-warning w-100">Lihat Rincian</button>
                        </form>
                    </div>
                @endforeach
            </div>
        </div>

        @endif

@endsection
