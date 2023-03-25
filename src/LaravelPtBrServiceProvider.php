<?php

namespace ChristianoErick\LaravelPtBr;

use Illuminate\Support\ServiceProvider;

class LaravelPtBrServiceProvider extends ServiceProvider
{
	public function register()
	{
		$this->publishes([
			__DIR__ . '/pt-BR' => $this->app->langPath() . '/pt-BR',
		], 'laravel-pt-br');
	}
}