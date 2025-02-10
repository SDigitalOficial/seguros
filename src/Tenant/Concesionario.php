<?php

namespace DigitalsiteSaaS\Seguros\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;


class Concesionario extends Model{

use UsesTenantConnection;

protected $table = 'rombo_concesionarios';
public $timestamps = true;

}