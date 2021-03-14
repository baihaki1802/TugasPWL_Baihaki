@extends('layouts.app')
@section('title', 'EiBeauty')
@section('content')

<div id="background">
    <div class="jumbotron">
      <p>Beauty</p>
      <h1>INDONESIA</h1>
    </div>
  </div>
    <div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>The Beauty of Indonesia</h1>
        <div class="row">
          <div class="col-sm-12">
          <img src="{{ ('img/hom.png') }}">
            <p class="text-justify">Untuk kamu yang pernah berpikir bahwa kamu biasa-biasa saja dan 
                tidak cantik, yakinilah bahwa sekarang kamu tidak harus memaksakan dirimu mengubah
                 penampilan kamu sedemikian rupa untuk mendapatkan standar kecantikan tersebut.
                  Karena cantik dari luar bukan seharusnya standar yang harus dikejar, 
                  melainkan cantik dari dalam.Cantik yang terpancar dari dalam diri bisa dimulai dengan 
                  mengubah cara pandang dan pola pikir selalu menuju ke hal yang positif.
                   Berpikir positif juga mampu membuat kamu lebih percaya diri dan berguna 
                   untuk memperlambat proses penuaan. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
    <x-alert theme="success" closeable="true">
        Selamat datang di page home !
    </x-alert>

    </br>


@stop

@section('js')
    <script>
        console.log('Hello');
    </script>
@stop