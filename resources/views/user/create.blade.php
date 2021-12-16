@extends('layouts.master')
@section('contain')
<div class="container ">
<h3 class="my-5 text-center"> Tambah Produk Baru</h3>

<form action="/product/create/post" method="post">@csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Nama Produk</label>
        <input type="text" name='name' class="form-control" id="formGroupExampleInput" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Deskripsi</label>
        <input type="text" name='description'  class="form-control" id="formGroupExampleInput" >
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Kuantitas</label>
        <input type="text" name='qty'  class="form-control" id="formGroupExampleInput" >
      </div>
      <div class="form-group">
          <label for="exampleFormControlSelect1">Kategori</label>
          <select class="form-control" id="exampleFormControlSelect1"  name="category">
            <option>Makanan</option>
            <option>Minuman</option>
            <option>Sembako</option>
          </select>
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Harga Beli</label>
          <input type="text" name='purchase_price'  class="form-control" id="formGroupExampleInput"   >
        </div>
        <div class="form-group">
          <label for="formGroupExampleInput">Harga Jual</label>
          <input type="text" name='selling_price'  class="form-control" id="formGroupExampleInput"  >
        </div>

            <div class="text-right ">
          <button class="btn btn-primary mb-5  ">Submit</button>
      </div>
</form>


</div>



@endsection
