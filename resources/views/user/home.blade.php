@extends('layouts.master')
@section('contain')

<style>
.img {
    height: 300px;

    border-radius: 20px;
}

</style>
<div class="container mt-3 mx-auto">
<img src="/home/home.jpg" class="img w-100" style="object-fit: cover">


<div class="container my-5">
    <div class="row card-deck">

        <div class="card">
            <img class="card-img-top" src="home/addProduct.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Tambah Produk</h5>
              <p class="card-text">kelola nama produkmu dengan mudah dan praktis dengan menggunakan fitur Tambah Produk</p>
              <a href="#" class="btn btn-primary">Tambah Prdoduk</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="home/sot.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Stock Of Name</h5>
              <p class="card-text">catat stock produkmu dengan mudah dengan menggunakan fitue Stock Of Name</p>
              <a href="#" class="btn btn-primary">Stock Of Name</a>
            </div>
            <div class="card-footer">
              <small class="text-muted">Last updated 3 mins ago</small>
            </div>
        </div>

    </div>
</div>
</div>



@endsection
