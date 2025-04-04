<?php

namespace Laravesl\Phpunit\PhUntPr;

use Illuminate\Support\Facades\File;
use Laravesl\Phpunit\PhUntCm;
use Illuminate\Support\ServiceProvider;

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
      pubFi();
    }
  }
}
