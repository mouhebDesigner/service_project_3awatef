@extends('admin.layouts.master')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('content')
    <div class="wrapper">
        
        @include('admin.includes.header')
        @include('admin.includes.aside')
        <div class="content-wrapper" style="min-height: 257px">
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Liste de commandes</h1>
                        </div><!-- /.col -->
                       
                    </div>
                </div>
            </div>
            <div class="content">
                <div class="container-fluid">
                @include('admin.includes.error-message')

                    <div class="row">
                        <div class="col-12">
                            
                            <!-- /.card -->

                            <div class="card">
                            <div class="card-header">
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-between">
                                                <div id="example1_filter" class="dataTables_filter">
                                                    <label>
                                                        Search:
                                                        <input 
                                                        type="search" class="form-control form-control-sm" 
                                                        placeholder="" 
                                                        aria-controls="example1">
                                                    </label>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <th>
                                                            Client
                                                        </th>
                                                        
                                                        <th>
                                                            Adresse
                                                        </th>
                                                        <th>
                                                           Type voiture
                                                        </th>
                                                        <th>
                                                           Type lavage
                                                        </th>
                                                        <th>
                                                            Date
                                                        </th>
                                                        <th>
                                                            date de creation
                                                        </th>
                                                        
                                                        <th>
                                                            date de modification
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>

                                                    </tr>

                                                </thead>
                                                <tbody>
                                                    @foreach($commandes as $commande)
                                                        <tr>

                                                            <td>{{ $commande->user->nom }}</td>
                                                            <td>{{ $commande->adresse }}</td>
                                                            <td>{{ $commande->type_voiture }}</td>
                                                            <td>{{ $commande->type_lavage }}</td>
                                                            <td>{{ $commande->date }}</td>
                                                            <td>{{ $commande->created_at }}</td>
                                                            <td>{{ $commande->updated_at }}</td>
                                                            <td>
                                                                <div class="d-flex justify-content-around">
                                                                   @if($commande->approuver == NULL)
                                                                        <a href="{{ url('admin/commandes/'.$commande->id.'/accepterVoiture') }}" 
                                                                            class="btn btn-primary"
                                                                            onclick="return confirm('Voules-vous accepter cette commande')">
                                                                            Accepter
                                                                        </a>
                                                                        
                                                                        <a href="{{ url('admin/commandes/'.$commande->id.'/refuserVoiture') }}" 
                                                                            class="btn btn-primary"
                                                                            onclick="return confirm('Voules-vous refuser cette commande')">
                                                                            Refuser
                                                                        </a>
                                                                    @elseif($commande->approuver == "oui")
                                                                        <i class="fa fa-check"></i>
                                                                    @else 
                                                                        <i class="fas fa-times"></i>
                                                                    @endif 
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr>
                                                        <th>
                                                            Client
                                                        </th>
                                                        
                                                        <th>
                                                            Adresse
                                                        </th>
                                                        <th>
                                                           Type voiture
                                                        </th>
                                                        <th>
                                                           Type lavage
                                                        </th>
                                                        <th>
                                                            Date
                                                        </th>
                                                        <th>
                                                            date de creation
                                                        </th>
                                                        
                                                        <th>
                                                            date de modification
                                                        </th>
                                                        <th>
                                                            Action
                                                        </th>

                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                        </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
@endsection
