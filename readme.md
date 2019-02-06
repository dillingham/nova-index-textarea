# Nova Index Textarea

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-index-textarea.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-index-textarea)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-index-textarea.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-index-textarea)

Nova package that adds methods to Textarea for index view.

### Install

```bash
composer require dillingham/nova-index-textarea
```

### Usage

```php
use Laravel\Nova\Fields\Textarea;
```
```php
Textarea::make('Description')->showOnIndex()->limit(10)
```

### Options

`limit($amount, $ending)` accepts a second paramter to override '...'
