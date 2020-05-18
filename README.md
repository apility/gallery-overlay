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
yarn add apility/apility/OwlCarousel2
```

## Imports

Javascript:

```javascript
import 'owl.carousel'
```

Sass:
Copy over galleryOverlay.scss and import it, or vendor:publish and import that way
```scss
@import "~owl.carousel/dist/assets/owl.carousel.css";
@import "./vendor/galleryOverlay.scss";
```

On your template view <x-gallery-overlay />

```php
@extends('layouts.base')
@section('body')
 <x-blocks area="sections" />
 <x-gallery-overlay />
@endsection
```

Finally add in the play button where you want it to show up:

```php
@hasSection('playButton')
  @yield('playButton')
@endif
```

## Contributing

Thank you for considering contributing to the Netflex Structure! Please read the [contribution guide](CONTRIBUTING.md).

## Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](CODE_OF_CONDUCT.md).

## License

Netflex Structure is open-sourced software licensed under the [MIT license](LICENSE.md).

<hr>

Copyright &copy; 2020 **[Apility AS](https://apility.no)**
