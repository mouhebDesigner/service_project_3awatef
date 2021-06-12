@extends('layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
@endsection
@section('content')

    @include('includes.header')
    <div class="page-header" style="margin-top: 0px;">
        <div class="container">
            <div class="row">
             
                
            </div>
        </div>
    </div>
    <div class="contact wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
        <div class="container">
            @if(session('success'))
                <div class="section-header text-center alert-done">
                    <h4>{{ session('success') }}</h4>
                </div>
            @endif
            <div class="section-header text-center">
                <h4>Liste des commandes</h4>
            </div>
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="row">
                        <div class="col-md-6 d-flex justify-content-center">
                            <a href="{{ url('commandes') }}" class="commande">
                                Commandes simple
                            </a>
                            
                        </div>
                        <div class="col-md-6 d-flex justify-content-center ">
                            <a href="{{ url('commandes_voitures') }}" class="commande">
                                Commandes voitures
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
   
@endsection


