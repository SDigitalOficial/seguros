<?php

namespace DigitalsiteSaaS\Seguros\Tenant;

use Hyn\Tenancy\Traits\UsesTenantConnection;
use Illuminate\Database\Eloquent\Model;


class Contrato extends Model{

use UsesTenantConnection;

protected $table = 'rombo_contratos';
public $timestamps = true;

}