@extends ('LayoutRombo.layout')

@section('ContenidoSite-01')

<div class="row pt-5">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Aseguradoras Registradas</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6>
                                <div class="table-responsive m-t-40">
                                    <div id="example23_wrapper" class="dataTables_wrapper"><div id="example23_filter" class="dataTables_filter"><label>Search:<input type="search" class="" placeholder="" aria-controls="example23"></label></div><table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                        <thead>
                                           
                                            <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Aseguradora</th><th rowspan="1" colspan="1">Creación</th><th rowspan="1" colspan="1">Acciones</th></tr>
                                   
                                        </thead>
                                        <tfoot>
                                              <tr><th rowspan="1" colspan="1">ID</th><th rowspan="1" colspan="1">Aseguradora</th><th rowspan="1" colspan="1">Creación</th><th rowspan="1" colspan="1">Acciones</th></tr>
                                        </tfoot>
                                        <tbody>
                                          @foreach($aseguradora as $aseguradora)
                                        <tr role="row" class="odd">
                                                <td class="sorting_1">{{$aseguradora->id}}</td>
                                                <td>{{$aseguradora->aseguradora}}</td>
                                                <td>{{$aseguradora->created_at}}</td>
                                                <td>{{$aseguradora->updated_at}}</td>
                                             
                                            </tr>
                                           @endforeach
                                        </tbody>
                                    </table><div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div><div class="dataTables_paginate paging_simple_numbers" id="example23_paginate"><a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a><span><a class="paginate_button current" aria-controls="example23" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example23" data-dt-idx="2" tabindex="0">2</a><a class="paginate_button " aria-controls="example23" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example23" data-dt-idx="4" tabindex="0">4</a><a class="paginate_button " aria-controls="example23" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example23" data-dt-idx="6" tabindex="0">6</a></span><a class="paginate_button next" aria-controls="example23" data-dt-idx="7" tabindex="0" id="example23_next">Next</a></div></div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
          

@stop