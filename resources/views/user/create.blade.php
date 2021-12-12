@extends('layouts.master')
@section('contain')
<div class="container ">
<h3 class="my-5 text-center"> Tambah Produk Baru</h3>

<form action="/product/create/post" method="POST">@csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Nama Produk</label>
      <input type="text" name='name[]' class="form-control" id="formGroupExampleInput" placeholder="Contoh: Indomie">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Kategori</label>
        <select class="form-control" id="exampleFormControlSelect1" name="category[]">
          <option>Makanan</option>
          <option>Minuman</option>
          <option>Sembako</option>
        </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Harga</label>
        <input type="text" name='price[]' value="5000" class="form-control" id="formGroupExampleInput" name="price" placeholder="Contoh: 5000">
      </div>

          <div class="text-right ">
        <button class="btn btn-primary mb-5  ">Submit</button>
    </div>
</form>


</div>



@endsection
