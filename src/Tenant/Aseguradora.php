<?php

 namespace DigitalsiteSaaS\Seguros\Tenant;

 use Hyn\Tenancy\Traits\UsesTenantConnection;
 use Illuminate\Database\Eloquent\Model;

 class Aseguradora extends Model{
 use UsesTenantConnection;

 protected $table = 'rombo_aseguradoras';
 public $timestamps = true;

 }
