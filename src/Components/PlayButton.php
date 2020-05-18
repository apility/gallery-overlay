<?php

namespace Apility\GalleryOverlay\Components;

use Illuminate\View\Component;
use Illuminate\Support\Facades\View;

class PlayButton extends Component 
{
  public function __construct()
  {
    
  }

  public function render()
  {
    return View::make('apility::play-button');
  }


}