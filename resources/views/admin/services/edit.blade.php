@extends('admin.layouts.master')


@section('content')
<div class="wrapper">
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Modifier un service 
                </h1>
            </section>
            <section class="content">
                <div class="row">
                <div class="col-md-12">
                
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Formulaire de modification</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('admin/services/'.$service->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="catalogue_id">Catalogue</label>
                                    <select name="catalogue_id" id="catalogue_id" class="form-control">
                                        <option value="" selected disbaled>Choisir catalogue</option>
                                        @foreach(App\Models\Catalogue::all() as $catalogue)
                                            <option value="{{ $catalogue->id }}" @if($service->catalogue_id == $catalogue->id) selected @endif>{{ $catalogue->nom }}</option>
                                        @endforeach
                                    </select>
                                    @error('mode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="mode">Mode</label>
                                    <select name="mode" id="mode" class="form-control">
                                        <option value="" selected disbaled>Choisir mode</option>
                                        <option value="interne" @if($service->mode == "interne") selected @endif>Interne</option>
                                        <option value="externe" @if($service->mode == "externe") selected @endif>Externe</option>
                                    </select>
                                    @error('mode')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="unit??">Unit??</label>
                                    <select name="unit??" id="unit??" class="form-control">
                                        <option value="" selected disbaled>Choisir unit??</option>
                                        <option value="metre" @if($service->unit?? == "metre") selected @endif>Interne</option>
                                        <option value="place" @if($service->unit?? == "place") selected @endif>Place</option>
                                        <option value="panne" @if($service->unit?? == "panne") selected @endif>Panne</option>
                                        <option value="consulter" @if($service->unit?? == "consulter") selected @endif>Consulter</option>
                                    </select>
                                    @error('unit??')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="titre">Titre de service</label>
                                    <input type="text" class="form-control" name="titre" value="{{ $service->titre }}" id="titre" placeholder="Saisir titre de module">
                                    @error('titre')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="prix">Prix de service</label>
                                    <input type="text" class="form-control" name="prix" value="{{ $service->prix }}" id="prix" placeholder="Saisir prix de module">
                                    @error('prix')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <input type="checkbox" class="form-control" value="oui" name="voiture"  id="prix">
                                    <label for="prix">Voiture</label>

                                <div class="form-group">
                                    <label for="description">Description de service</label>
                                    <textarea class="form-control" name="description" value="{{ $service->description }}" id="description" placeholder="Saisir description">{{ $service->description }}</textarea>
                                    @error('description')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="image">Image de service</label>
                                    <input type="file" class="form-control" name="image" value="{{ $service->image }}" id="image" placeholder="Saisir image de module">
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                            <button type="reset" class="btn btn-info">Annuler</button>
                            </div>
                        </form>
                        </div>
                </div>
                  
                </div>
            </section>
        </div>
   


@endsection