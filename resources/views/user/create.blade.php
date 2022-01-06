@extends('layouts.master')
@section('l1')
    Product
@endsection
@section('a1')
    /product
@endsection
@section('l2')
    Create Product
@endsection
@section('contain')
<style>
    label ,h3{
        color: rgb(68, 68, 68)
    }
    .bcks {
        background: #d5f2ff;
    }


</style>

    <div class="container ">
        <div class="row">
            <div class="bcks mb-5 col-9 mx-auto shadow px-5  rounded shadow-sm my-0" >
                <h3 class="my-3 text-center"> Tambah Produk Baru</h3>

                <form action="/product/create/post" method="post">@csrf
                    <div class="form-group" >
                        <label id="warnai" for="formGroupExampleInput">Nama Produk</label>
                        <input type="text" name='name' class="form-control" id="formGroupExampleInput " required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Deskripsi</label>
                        <input type="text" name='description' class="form-control" id="formGroupExampleInput" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Kategori</label>
                        <select class="form-control text-center" id="exampleFormControlSelect1" name="category" required>
                            <option>Makanan</option>
                            <option>Minuman</option>
                            <option>Sembako</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Harga Beli</label>
                        <input type="text" name='purchase_price' class="form-control " id="formGroupExampleInput" required>
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Harga Jual</label>
                        <input type="text" name='selling_price' class="form-control " id="formGroupExampleInput" required>
                    </div>

                    <div class="text-right ">
                        <button class="btn btn-primary mb-5">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
