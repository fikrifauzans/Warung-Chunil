@extends('layouts.master')
@section('contain')
<style>
.img {
    height: 300px;
    border: 2px solid black;
    border-radius: 20px;
}
</style>


<div class="container mt-3 mx-auto">
    <img src="/home/addProduct.jpg" class="img w-100" style="object-fit: cover">
    <a href="/product/create" class="btn btn-primary my-3 float-left float-right"> <span class=' fas fa-plus-square'></span> Tambah Produk</a>

<table class="table ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Name</th>
        <th scope="col">Kategori</th>
        <th scope="col">Harga</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>

    <tbody>

        @foreach ($products as $product)
        <tr>
            <th scope="row">{{ ++$number }}</th>
            <td>{{ $product->name }}</td>
            <td>{{  $product->category->name }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a class="btn btn-secondary" href="#">Edit</a>
                 <a class="btn btn-danger" href="#">Hapus</a>
                </td>
            </tr>
        @endforeach

    </tbody>
  </table>

@endsection
