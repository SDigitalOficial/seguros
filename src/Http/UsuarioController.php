<?php

namespace DigitalsiteSaaS\Seguros\Http;

use DigitalsiteSaaS\Usuario\Usuario;
use DigitalsiteSaaS\Seguros\Contrato;
use Illuminate\Support\Facades\Auth;
use DB;
use File;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Input;
use Illuminate\Support\Str;
use GuzzleHttp\Client;
use Hyn\Tenancy\Models\Hostname;
use Hyn\Tenancy\Models\Website;
use Hyn\Tenancy\Repositories\HostnameRepository;
use Hyn\Tenancy\Repositories\WebsiteRepository;
use DigitalsiteSaaS\Facturacion\Empresa;
use DigitalsiteSaaS\Facturacion\Notas;
use Request;
use Response;
use PDF;
use Carbon\Carbon;


class UsuarioController extends Controller{

protected $tenantName = null;

public function __construct(){

  $hostname = app(\Hyn\Tenancy\Environment::class)->hostname();
  if ($hostname){
  $fqdn = $hostname->fqdn;
  $this->tenantName = explode(".", $fqdn)[0];
 }
}


public function crear_clientes() {
 return view('seguros::crear_cliente');
}

public function crear_contratos() {
   if(!$this->tenantName){
 $aseguradora = Aseguradora::all();
 $concesionario = Concesionario::all();
 }else{
 $concesionario = \DigitalsiteSaaS\Seguros\Tenant\Concesionario::all();
 $aseguradora = \DigitalsiteSaaS\Seguros\Tenant\Aseguradora::all(); 
 }
 return view('seguros::creacontrato')->with('aseguradora', $aseguradora)->with('concesionario', $concesionario);
}

public function crear_aseguradoras() {
 if(!$this->tenantName){
 $aseguradora = Aseguradora::all();
 }else{
 $aseguradora = \DigitalsiteSaaS\Seguros\Tenant\Aseguradora::all(); 
 }
 return view('seguros::creaaseguradora')->with('aseguradora', $aseguradora);
}

public function clientes() {

 return view('seguros::clientes');
}

public function dashboard() {

   if(!$this->tenantName){
 $polizas_totales = Contrato::count();

 }else{
 $polizas_totales = \DigitalsiteSaaS\Seguros\Tenant\Contrato::count(); 
 $polizas_colectiva = \DigitalsiteSaaS\Seguros\Tenant\Contrato::where('poliza','=',1)->count();
 $polizas_externa = \DigitalsiteSaaS\Seguros\Tenant\Contrato::where('poliza','=',2)->count();
 $concesinarioweb = \DigitalsiteSaaS\Seguros\Tenant\Concesionario::all();
 $concesionarios = \DigitalsiteSaaS\Seguros\Tenant\Contrato::select('concesionario')
     ->selectRaw('count(concesionario) as sum')
     ->groupBy('concesionario')
     ->orderBy('sum', 'desc')
     ->get();

  $aseguradoraweb = \DigitalsiteSaaS\Seguros\Tenant\Aseguradora::all();
 $aseguradoras = \DigitalsiteSaaS\Seguros\Tenant\Contrato::select('aseguradora')
     ->selectRaw('count(aseguradora) as sum')
     ->groupBy('aseguradora') 
     ->orderBy('sum', 'desc')
     ->get();
 }

 return view('seguros::dashboard')->with('polizas_totales', $polizas_totales)->with('polizas_colectiva', $polizas_colectiva)->with('polizas_externa', $polizas_externa)->with('concesionarios', $concesionarios)->with('concesinarioweb', $concesinarioweb)->with('aseguradoras', $aseguradoras)->with('aseguradoraweb', $aseguradoraweb);
}


public function aseguradora() {
   if(!$this->tenantName){
 $aseguradora = Aseguradora::all();
 }else{
 $aseguradora = \DigitalsiteSaaS\Seguros\Tenant\Aseguradora::all(); 
 }
 return view('seguros::aseguradora')->with('aseguradora', $aseguradora);;
}


public function concesionarios() {
   if(!$this->tenantName){
 $concesionario = Concesionario::all();
 }else{
 $concesionario = \DigitalsiteSaaS\Seguros\Tenant\Concesionario::all(); 
 }
 return view('seguros::concesionario')->with('concesionario', $concesionario);;
}

public function contratos() {

  if(!$this->tenantName){
 $contrato = Contrato::all();
 $aseguradora = Aseguradora::all();
 }else{
 $contrato = \DigitalsiteSaaS\Seguros\Tenant\Contrato::all(); 
 $aseguradora = \DigitalsiteSaaS\Seguros\Tenant\Aseguradora::all(); 
 }
 return view('seguros::contratos')->with('contrato', $contrato)->with('aseguradora', $aseguradora);
}

public function crear_concesionarios() {
 return view('seguros::crear_concesionario');
}

public function actualizacion_datos($id) {
 if(!$this->tenantName){
 $actualizacion = Contrato::all();
 }else{
 $actualizacion = \DigitalsiteSaaS\Seguros\Tenant\Contrato::where('contrato', '=', $id)->get(); 
 }
 return view('seguros::datos')->with('actualizacion', $actualizacion);
}


public function crear(){ 
 if(!$this->tenantName){
 $contrato = new Contrato;
 }else{
 $contrato = new \DigitalsiteSaaS\Seguros\Tenant\Contrato; 
 }
 $contrato->radicado = Input::get('radicado');
 $contrato->contrato = Input::get('contrato');
 $contrato->concesionario = Input::get('concesionario');
 $contrato->nombres = Input::get('nombres');
 $contrato->inicio = Input::get('inicio');
 $contrato->fin = Carbon::parse($contrato->inicio)->addDays(365)->toDateString();
 $contrato->poliza = Input::get('poliza');
 $contrato->valor = Input::get('valor');
 $contrato->placa = Input::get('placa');
 $contrato->aseguradora = Input::get('aseguradora');
 $contrato->prima = Input::get('prima');
 $contrato->observaciones = Input::get('observaciones');
 $contrato->email = Input::get('email');
 $contrato->exepcion = Input::get('exepcion');
 $contrato->save();
 return Redirect('seguros/contratos')->with('status', 'ok_create');
} 

public function crearconcesionario(){ 
 if(!$this->tenantName){
 $concesionario = new Concesionario;
 }else{
 $concesionario = new \DigitalsiteSaaS\Seguros\Tenant\Concesionario; 
 }
 $concesionario->concesionario = Input::get('concesionario');
 
 $concesionario->save();
 return Redirect('seguros/concesionarios')->with('status', 'ok_create');
} 


public function crearaseguradora(){ 
 if(!$this->tenantName){
 $aseguradora = new Aseguradora;
 }else{
 $aseguradora = new \DigitalsiteSaaS\Seguros\Tenant\Aseguradora; 
 }
 $aseguradora->aseguradora = Input::get('aseguradora');
 
 $aseguradora->save();
 return Redirect('seguros/aseguradoras')->with('status', 'ok_create');
} 

}