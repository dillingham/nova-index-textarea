# Nova Index Textarea

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-index-textarea.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-index-textarea)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-index-textarea.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-index-textarea) [![Twitter Follow](https://img.shields.io/twitter/follow/dillinghammm?color=%231da1f1&label=Twitter&logo=%231da1f1&logoColor=%231da1f1&style=flat-square)](https://twitter.com/im_brian_d)

Nova package for showing textarea content on index with limits

### Install

```bash
composer require dillingham/nova-index-textarea
```

### Usage

This package adds two methods to the existing `Textarea` Nova field

```php
use Laravel\Nova\Fields\Textarea;
```
```php
Textarea::make('Description')->showOnIndex()->limit(10)
```

### Options

`limit($amount, $ending='...')` 


### Sidenote

Add `->showAlways()` to turn off toggling on detail

---

# Author

Hi 👋, Im Brian Dillingham, creator of this Nova package [and others](https://novapackages.com/collaborators/dillingham)

Hope you find it useful. Feel free to reach out with feedback.

Follow me on twitter: [@im_brian_d](https://twitter.com/im_brian_d) 
