<?php

namespace Apility\GalleryOverlay\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;

class GalleryOverlay extends Component 
{
  public function __construct()
  {
    
  }
  public function list() {

    return current_page()->content
      ->filter(function($area) {
        return $area->area === "galleryList";
      })->values()
      ->map(function($area) {
        return [
          'data' => $area,
          'images' => current_page()->content->filter(function($image) use ($area) {
              return $image->area == "gallery__" . $area->title;
            })->values()
          ];
      });
  }

  public function shouldRender()
  {
    return current_mode() === 'edit' || $this->list()->count();
  }

  public function render()
  {
    return View::make('apility::gallery-overlay');
  }


}