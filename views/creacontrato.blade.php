@extends ('LayoutRombo.layout')

@section('ContenidoSite-01')


                    <div class="col-lg-12 mt-5">
                        <div class="card card-outline-info">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Crear Contrato</h4>
                            </div>
                            <div class="card-body">
                                  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm1', 'url' => array('seguros/crear-contratos'))) }}
                                    <div class="form-body">
                                        <h3 class="card-title">Person Info</h3>
                                        <hr>
                                        <div class="row p-t-20">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Radicado</label>
                                                    <input type="text" name="radicado" id="firstName" class="form-control" placeholder="Ingrese Radicado">
                                                    </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Contrato</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Ingrese Contrato" name="contrato">
                                                     </div>
                                            </div>
                                          
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Concesionario</label>
                                                    <select class="form-control custom-select" name="concesionario">
                                                       <option value="" disabled selected>Seleccione Concesionario</option>
                                                        @foreach($concesionario as $concesionario)
                                                        <option value="{{$concesionario->id}}">{{$concesionario->concesionario}}</option>
                                                        @endforeach
                                                    </select>
                                                     </div>
                                            </div>
                                            <!--/span-->

                                               <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Nombres</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Ingrese Nombres" name="nombres">
                                                     </div>
                                            </div>
                                            
                                        </div>
                                        <!--/row-->
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fecha Inicio</label>
                                                    <input type="date" class="form-control" name="inicio" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fecha Fin</label>
                                                    <input type="date" class="form-control" name="fin" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div>
                                            <!--/span-->
                                            <!--/span-->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Tipo Póliza</label>
                                                    <select class="form-control custom-select" name="poliza">
                                                        <option value="1">Colectiva</option>
                                                        <option value="2">Externa</option>
                                                    </select>
                                                    </div>
                                            </div>   

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Valor</label>
                                                    <input type="text" id="firstName" name="valor" class="form-control" placeholder="Ingrese Contrato">
                                                     </div>
                                            </div> 
                                            
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Placa</label>
                                                    <input type="text" id="firstName" name="placa" class="form-control" placeholder="Ingrese Contrato">
                                                    </div>
                                            </div>   

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Aseguradora</label>
                                                    <select class="form-control custom-select" name="aseguradora">
                                                        <option value="" disabled selected>Seleccione Aseguradora</option>
                                                        @foreach($aseguradora as $aseguradora)
                                                        <option value="{{$aseguradora->id}}">{{$aseguradora->aseguradora}}</option>
                                                        @endforeach
                                                    </select>
                                                     </div>
                                            </div>   

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Prima</label>
                                                    <input type="text" id="firstName" class="form-control" placeholder="Ingrese Contrato" name="prima">
                                                    </div>
                                            </div>   

                                             <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="control-label">Fecha Exepción</label>
                                                    <input type="date" name="exepcion" class="form-control" placeholder="dd/mm/yyyy">
                                                </div>
                                            </div> 

                                            <div class="col-md-12">
                                                <div class="form-group">

                                                    <label class="control-label">Observaciones</label>
                                                    <textarea id="w3review" name="observaciones" class="form-control" name="w3review" rows="4" cols="50">
</textarea>
                                                </div>
                                            </div> 


                                            
                                                                                    <!--/span-->
                                        </div>
                                     
                                        
                                        
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
          
 {{ Form::close() }}
@stop