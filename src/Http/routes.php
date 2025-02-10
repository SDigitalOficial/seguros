<?php
Route::get('seguros/dashboard', function () {
   return View::make('seguros::index');
});

Route::get('seguros/clientes', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@clientes');
Route::get('seguros/creaclientes', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@crear_clientes');


Route::get('seguros/contratos', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@contratos');
Route::get('seguros/creacontratos', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@crear_contratos');
Route::post('seguros/crear-contratos', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@crear');



Route::get('seguros/concesionarios', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@concesionarios');
Route::get('seguros/crearconcesionario', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@crear_concesionarios');
Route::post('seguros/crear-concesionarios', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@crearconcesionario');



Route::get('seguros/aseguradoras', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@aseguradora');
Route::get('seguros/creaaseguradoras', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@crear_aseguradoras');
Route::post('seguros/crear-aseguradoras', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@crearaseguradora');


Route::get('pr/ofertas', 'DigitalsiteSaaS\Seguros\Http\UsuarioController@ofertas');
