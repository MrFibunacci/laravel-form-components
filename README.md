![Laravel Form Components illustration](/docs/laravel-form-components.png)
<p style="text-align: center;">
    <a href="https://github.com/MrFibunacci/laravel-form-components/releases" title="Latest Stable Version">
        <img src="https://img.shields.io/github/release/MrFibunacci/laravel-form-components.svg?style=flat-square" alt="Latest Stable Version">
    </a>
    <a href="https://packagist.org/packages/Okipa/laravel-form-components" title="Total Downloads">
        <img src="https://img.shields.io/packagist/dt/okipa/laravel-form-components.svg?style=flat-square" alt="Total Downloads">
    </a>
    <a href="https://github.com/MrFibunacci/laravel-form-components/actions" title="Build Status">
        <img src="https://github.com/MrFibunacci/laravel-form-components/actions/workflows/ci.yml/badge.svg" alt="Build Status">
    </a>
    <a href="/LICENSE.md" title="License: MIT">
        <img src="https://img.shields.io/badge/License-MIT-blue.svg" alt="License: MIT">
    </a>
</p>

Save time and take advantage of a set of dynamical, ready-to-use and fully customizable form components.

Components are Livewire compatible and can be used with the following UI frameworks:
* Bootstrap 5
* Bootstrap 4
* TailwindCSS 3 (upcoming feature)

Found this package helpful? Please consider supporting my work!

[![Donate](https://img.shields.io/badge/Buy_me_a-Ko--fi-ff5f5f.svg)](https://ko-fi.com/arthurlorent)
[![Donate](https://img.shields.io/badge/Donate_on-PayPal-green.svg)](https://paypal.me/arthurlorent)

## Compatibility

| Laravel            | Livewire | PHP                | Package |
|--------------------|----------|--------------------|---------|
| ^12.0 &#124; ^13.0 | ^2.0     | ^8.3               | ^1.3    |
| ^9.0 &#124; ^10.0  | ^2.0     | 8.1.* &#124; 8.2.* | ^1.2    |
| ^8.0 &#124; ^9.0   | ^2.0     | ^8.1 &#124; ^8.2   | ^1.1    |
| ^8.0 &#124; ^9.0   | ^2.0     | ^8.0 &#124; ^8.1   | ^1.0    |

## Upgrade guide

* [From okipa/laravel-bootstrap-components to okipa/laravel-form-components](/docs/upgrade-guides/from-laravel-bootstrap-components-to-laravel-form-components.md)

## Usage example

Call the components you need in your views and let this package take care of the HTML generation time-consuming part.

```blade
<x:form::form class="row" method="PUT" :action="route('user.update', $user)" :bind="$user">
    <div class="col-md-6">
        <x:form::input name="name"/>
        <x:form::input type="email" name="email"/>
        <x:form::textarea name="biography" :locales="['fr', 'en']"/>
    </div>
    <div class="col-md-6">
        <x:form::select name="hobbies" :options="[1 => 'Sport', 2 => 'Cinema', 3 => 'Literature', 4 => 'Travel']" caption="Select your favorite hobbies." multiple/>
        <x:form::checkbox name="technologies" :group="[1 => 'Laravel', 2 => 'Bootstrap', 3 => 'Tailwind', 4 => 'Livewire']" inline/>
        <x:form::radio name="gender" :group="[1 => 'Male', 2 => 'Female', 3 => 'Other']" inline/>
        <x:form::toggle-switch name="active"/>
    </div>
    <div class="col-12 mt-2">
        <x:form::button.link class="btn-secondary me-3">{{ __('Cancel') }}</x:form::button.link>
        <x:form::button.submit/>
    </div>
</x:form:form>
```

And get these components displayed:

![Laravel Form Components screenshot](docs/screenshot.png)

## Installation

You can install the package via composer:

```bash
composer require okipa/laravel-form-components
```

## Further documentation:

For further information check the [wiki](https://github.com/MrFibunacci/laravel-form-components/wiki)

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Arthur LORENT](https://github.com/Okipa)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
