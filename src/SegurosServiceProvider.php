<?php

namespace DigitalsiteSaaS\Seguros;

use Illuminate\Support\ServiceProvider;

class SegurosServiceProvider extends ServiceProvider{
	
 public function register(){
 $this->app->bind('seguros', function($app){
 return new Seguros;
 });
 }

 public function boot(){
 require __DIR__ . '/Http/routes.php';
 $this->loadViewsFrom(__DIR__ . '/../views', 'seguros');
 $this->publishes([
 __DIR__ . '/migrations/2015_07_25_000000_create_usuario_table.php' => base_path('database/migrations/2015_07_25_000000_create_usuario_table.php'),
 ]);
 }

}