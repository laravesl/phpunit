<?php

namespace Laravesl\Phpunit\PhUntPr;

use Laravesl\Phpunit\PhUntCm;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\File;

class PhAs extends ServiceProvider
{
  public function boot()
  {
    $this->register();
  }

  /**
    * Register the service provider.
    *
    * @return void
    */
  public function register()
  {
    if ($this->app->runningInConsole()) {
      $this->commands([
        PhUntCm::class,
      ]);
      pubFi();
    }
  }

}
