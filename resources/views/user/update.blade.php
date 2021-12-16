@extends('layouts.master')
@section('contain')
<div class="container ">
<h3 class="my-5 text-center"> Edit Produk </h3>

<form action="/product/update/{{ $product->id }}/updated" method="post">@csrf
    <div class="form-group">
      <label for="formGroupExampleInput">Nama Produk</label>
      <input type="text" name='name' value="{{ $product->name }}" class="form-control" id="formGroupExampleInput" >
    </div>
    <div class="form-group">
      <label for="formGroupExampleInput">Deskripsi</label>
      <input type="text" name='description' value="{{ $product->description }}" class="form-control" id="formGroupExampleInput" >
    </div>

    <div class="form-group">
      <label for="formGroupExampleInput">Kuantitas</label>
      <input type="text" name='qty' value="{{ $product->qty }}" class="form-control" id="formGroupExampleInput" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Kategori</label>
        <select class="form-control" id="exampleFormControlSelect1" value="{{ $product->category->name }}" name="category">
          <option>Makanan</option>
          <option>Minuman</option>
          <option>Sembako</option>
        </select>
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Harga Beli</label>
        <input type="text" name='purchase_price'  class="form-control" id="formGroupExampleInput" value="{{ $product->purchase_price }}" name="price" placeholder="Contoh: 5000">
      </div>
      <div class="form-group">
        <label for="formGroupExampleInput">Harga Jual</label>
        <input type="text" name='selling_price'  class="form-control" id="formGroupExampleInput" value="{{ $product->selling_price }}" name="price" placeholder="Contoh: 5000">
      </div>

          <div class="text-right ">
        <button class="btn btn-primary mb-5  ">Submit</button>
    </div>
</form>
</div>
@endsection
