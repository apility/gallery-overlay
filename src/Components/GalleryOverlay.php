<?php

namespace Apility\GalleryOverlay\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;

class GalleryOverlay extends Component 
{

  // public function shouldRender()
  // {
  //   return $this->src();
  // }

  public function render()
  {
    return View::make('apility::gallery-overlay');
  }


}