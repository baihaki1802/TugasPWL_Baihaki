@extends('layouts.app')
@section('title', 'EiBeauty')
@section('content')
<section class="contact" id="contact">
    <div class="container">
        <div class="row pt-5 mb-4" style="margin-left: 10px;">
        Hai
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-4">
               

                <ul class="list-group mb-4">
                    <li class="list-group-item "><h2>ME</h2></li>
                    <li class="list-group-item">5520119020</li>
                    <li class="list-group-item">M.Baihaki.A.A</li>
                </ul>
                <div class="card bg-primary text-white mb-4 text-center">
                    <div class="card-body">
                        <h5 class="card-title">Contact Me</h5>
                        <p class="card-text">mbaihakiabdulaziz9a@gmail.com</p>
                    </div>
                </div>
            </div>

        <div class="col-lg-6">
            <form>
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" class="form-control" id="nama">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="text" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <x-modal>
                        halo
                    </x-modal>
                </div>
            </form>
        </div> 
</section>
@stop