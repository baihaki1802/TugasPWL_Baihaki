@extends('layouts.app')
@section('title', 'EiBeauty')
@section('content')
<link rel="stylesheet" type="text/css" href="{{ asset('resources/css/app.css') }}">
<div class="container bawah">
    <h1>BASIC SKIN-CARE STEPS</h1>
    <div class="row">
      <div class=" col-md-4"><img class="img-circle" src="{{ ('img/cumuk.jpg') }}" width="200px">
        <h3>PEMBERSIH WAJAH</h3>
        <p class="text-center">Membersihkan wajah bisa membantu mencegah munculnya komedo, mencegah jerawat,
             mengontrol produksi minyak dan membuat wajahmu terlihat lebih segar.</p>
      </div>
      <div class=" col-md-4 "><img class="img-circle" src="{{ ('img/plm.jpg') }}" width="200px">
        <h3>PELEMBAB</h3>
        <p class="text-center">Pelembap yang bisa digunakan untuk pemula adalah pelembap yang tidak mengandung
             bahan aktif, seperti centella asiatica, ekstrak lidah buaya, ekstrak bunga chamomile dan 
             semacamnya.</p>
      </div><div class="col-md-4"><img class="img-circle" src="{{ ('img/sss.jpg') }}" width="200px">
        <h3>TABIR SURYA</h3>
        <p class="text-center">Tabir surya memiliki fungsi untuk melindungi kulit wajah dari paparan sinar matahari,
             mencegah hiperpigmentasi kulit, melindungi lapisan kulit dari radikal bebas, mencerahkan dan mencegah
              tanda-tanda penuaan dini pada kulit.</p>
      </div>
    </div>
  </div>
@stop