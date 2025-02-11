@extends ('LayoutRombo.layout')

@section('ContenidoSite-01')

<div class="card-group" mt-5>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-briefcase-check text-info"></i></h2>
                                    <h3 class="">{{$polizas_totales}}</h3>
                                    <h6 class="card-subtitle">Total Pólizas</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 85%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-alert-circle text-success"></i></h2>
                                    <h3 class="">{{$polizas_colectiva}}</h3>
                                    <h6 class="card-subtitle">Póliza Colectiva</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 40%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="m-b-0"><i class="mdi mdi-wallet text-purple"></i></h2>
                                    <h3 class="">{{$polizas_externa}}</h3>
                                    <h6 class="card-subtitle">Póliza Externa</h6></div>
                                <div class="col-12">
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar" style="width: 56%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    
                </div>


         <div class="container">
             <div class="row">


                <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Concesionarios</h4>
                              
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            
                                                <th>Concesionario</th>
                                                <th>Total</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($concesionarios as $concesionarios)
                                             @foreach($concesinarioweb as $concesinariowebs)
                                              @if($concesinariowebs->id == $concesionarios->concesionario)
                                            <tr>
                                                <td> {{$concesinariowebs->concesionario}}</td>
                                                <td><span class="label label-danger">{{$concesionarios->sum}}</span> </td>
                                            </tr>
                                              @endif
                                             @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Aseguradora</h4>
                              
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                            
                                                <th>Aseguradora</th>
                                                <th>Total</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($aseguradoras as $aseguradoras)
                                             @foreach($aseguradoraweb as $aseguradorawebs)
                                              @if($aseguradorawebs->id == $aseguradoras->aseguradora)
                                            <tr>
                                                <td> {{$aseguradorawebs->aseguradora}}</td>
                                                <td><span class="label label-danger">{{$aseguradoras->sum}}</span> </td>
                                            </tr>
                                              @endif
                                             @endforeach
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


</div>
</div>
@stop


