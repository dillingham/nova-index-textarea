# Nova Index Textarea

[![Latest Version on Github](https://img.shields.io/github/release/dillingham/nova-index-textarea.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-index-textarea)
[![Total Downloads](https://img.shields.io/packagist/dt/dillingham/nova-index-textarea.svg?style=flat-square)](https://packagist.org/packages/dillingham/nova-index-textarea)

Nova package for showing textarea content on index with limits

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

`limit($amount, $ending)` 

Accepts a second paramter to override '...'

Also add `->showAlways()` if you don't toggling on detail
