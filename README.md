# Netflex Pages

Eloquent compatible model for working with Netflex Pagess.

<a href="https://packagist.org/packages/apility/gallery-overlay"><img src="https://img.shields.io/packagist/v/apility/gallery-overlay?label=stable" alt="Stable version"></a>
<a href="https://opensource.org/licenses/MIT"><img src="https://img.shields.io/github/license/netflex-sdk/pages.svg" alt="License: MIT"></a>
<a href="https://packagist.org/packages/apility/gallery-overlay/stats"><img src="https://img.shields.io/packagist/dm/apility/gallery-overlay" alt="Downloads"></a>

## Installation

```bash
composer require apility/gallery-overlay
```

## Dependencies

### owl carousel

```bash
yarn add apility/OwlCarousel2
```

## Setup

Add .scss files to your project:
By default this will be published to your /resources/scss/vendor/ folder.
This file can be tweaked to your project and will not be overriden unless you publish again with a force flag.

```bash
php artisan vendor:publish
```

## Imports

Javascript:
Add import to owl carousel to your app.js file

```javascript
import 'owl.carousel'
```

Sass:
Add import for owl carousel css and published galleryOverlay scss
```scss
@import "~owl.carousel/dist/assets/owl.carousel.css";
@import "/../vendor/galleryOverlay.scss";
```

## Usage

The blade components:
On your template view add <x-gallery-overlay />, this should be added as high up in the DOM tree as possible for the overlay to work properly.

example:
```php
@extends('layouts.base')
@section('body')
 <x-blocks area="sections" />
 <x-gallery-overlay />
@endsection
```

Finally add in the play button where you want it to show up:
You can replace the content inside to customize it's look.
example:
```php
<x-play-button>
  Play<i class="fas fa-play"></i>
</x-play-button>
```

## Contributing

Thank you for considering contributing to the Netflex Structure! Please read the [contribution guide](CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](CODE_OF_CONDUCT.md).

## License

Netflex Structure is open-sourced software licensed under the [MIT license](LICENSE.md).

<hr>

Copyright &copy; 2020 **[Apility AS](https://apility.no)**
