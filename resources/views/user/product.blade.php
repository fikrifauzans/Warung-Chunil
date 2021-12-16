@extends('layouts.master')
@section('contain')
<style>
.img {
    height: 300px;
    border-radius: 20px;
}
</style>


<div class="container mt-3 mx-auto">
    <img src="/home/addProduct.jpg" class="img w-100" style="object-fit: cover">

    <h3 class="text-center mt-5">Semua Produk</h3>
    <a href="/product/create" class="btn btn-primary my-3 float-left float-right"> <span class=' fas fa-plus-square'></span> Tambah Produk</a>

<table class="table ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Deskripsi</th>
        <th scope="col">Kuantitas</th>
        <th scope="col">Kategori</th>
        <th scope="col">Harga Beli</th>
        <th scope="col">Harga Jual</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>

    <tbody>

        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ ++$number }}</th>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->qty }}</td>
            <td>{{  $product->category->name }}</td>
            <td>{{ $product->purchase_price }}</td>
            <td>{{ $product->selling_price }}</td>
            <td>
                <form action="product/delete/{{ $product->id }}"  method="post">
                <a  class="btn btn-secondary" href="/product/update/{{ $product->id }}"><i class="far fa-edit"></i> Edit</a>
                 <button class="btn btn-danger" ><i class="fas fa-trash-alt"></i> Hapus</button>
                @csrf
                @method('delete')
                </form>

                </td>
            </tr>
        @endforeach

    </tbody>
  </table>

@endsection
