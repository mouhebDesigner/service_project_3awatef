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
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Service</th>
                            <th scope="col">Etat</th>
                            <th scope="col">date</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                        @foreach($commandes as $key => $commande)
                           
                        <tr>
                            <th scope="row">{{ $commande->id }}</th>
                            <td>{{ $commande->service->titre }}</td>
                            <td>
                                @if($commande->approuver == NULL)
                                    En attente
                                @elseif($commande->approuver == "oui")
                                    Accepté
                                @else 
                                    Réfusé
                                @endif
                            </td>
                            <td>{{ $commande->date }}</td>
                            <td>
                                @if($commande->approuver == NULL)
                                <div class="d-flex justify-content-between">
                                    <a href="{{ url('commandes/'.$commande->id.'/edit') }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form action="{{ url('commandes/'.$commande->id) }}">
                                            @csrf 
                                            @method('delete')
                                            <button type="submit" style="border: none; background: transparent">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                    </form>
                                </div>
                                @endif

                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 
   
@endsection


