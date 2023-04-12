# Laravel Unique Slug Generator

<p align="center">
<a href="https://packagist.org/packages/islomiddin-dev/unique-slug-generator"><img src="https://img.shields.io/packagist/dt/islomiddin-dev/unique-slug-generator" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/islomiddin-dev/unique-slug-generator"><img src="https://img.shields.io/packagist/v/islomiddin-dev/unique-slug-generator" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/islomiddin-dev/unique-slug-generator"><img src="https://img.shields.io/packagist/l/islomiddin-dev/unique-slug-generator" alt="License"></a>
</p>


### Recommended

- PHP 8.0 +
- Laravel 9.0 +
### Installation

**Composer**

```shell
composer require islomiddin-dev/unique-slug-generator
```

**Example**

```php
slug(modelClass: Post::class, attribute: 'title', name: $request->title);
```

**Output**

```php
//name: Unique Slug Generator
//output: unique-slug-generator

//name: Unique Slug Generator
//output: unique-slug-generator-1
```

- modelClass: Model class name
- attribute: Model attribute name
- name: Model attribute value

