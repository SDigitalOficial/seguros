@extends ('LayoutRombo.layout')

@section('ContenidoSite-01')

                    <div class="col-lg-12 pt-5">
                        <div class="card card-outline-info">
                            <div class="card-header" style="background: black;">
                                <h4 class="m-b-0 text-white">Crear Aseguradora</h4>
                            </div>
                            <div class="card-body">
                                  {{ Form::open(array('method' => 'POST','class' => 'form-horizontal','id' => 'defaultForm1', 'url' => array('seguros/crear-aseguradoras'))) }}
                                    <div class="form-body">
                                        
                                        <div class="row p-t-20">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label class="control-label">Nombre Aseguradora</label>
                                                    <input type="text" name="aseguradora" id="firstName" class="form-control" placeholder="Ingrese Aseguradora">
                                                    </div>
                                            </div>

                                           
                                          
                                        </div>
                                      
                                        
                                        
                                    </div>
                                    <div class="form-actions">
                                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Crear Aseguradora</button>
                                        <button type="button" class="btn btn-inverse">Cancel</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
          
 {{ Form::close() }}
@stop