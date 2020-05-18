<?php

namespace Apility\GalleryOverlay\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Apility\GalleryOverlay\Components\GalleryOverlay;
use Apility\GalleryOverlay\Components\GalleryOverlayGlobal;

class GalleryOverlayServiceProvider extends ServiceProvider
{
  public function register() {
    $this->registerComponents();
  }

  public function boot() {
    $this->publishes([
      __DIR__.'/../scss' => public_path('../resources/sass/vendor/galleryOverlay.scss')
    ]);
  }

  public function registerComponents() {
    View::addNamespace('apility', __DIR__ . '/../views');

    Blade::component(GalleryOverlay::class);
    Blade::component(GalleryOverlayGlobal::class);
  }
}