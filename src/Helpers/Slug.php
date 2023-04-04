<?php

use Illuminate\Support\Str;

function slug($modelClass, $attribute, $name): string
{
    $slug = Str::slug($name);

    $traits = class_uses($modelClass);

    $modelClass = in_array('Illuminate\Database\Eloquent\SoftDeletes', $traits) ? $modelClass::withTrashed() : $modelClass::query();

    $max = $modelClass->where($attribute, $name)->latest('id')->first(['slug']);

    if (isset($max)) {
        $lastSlug = $max->slug;
        preg_match('/-([0-9]+)$/', $lastSlug, $matches);
        $lastNumber = isset($matches[1]) ? intval($matches[1]) : 0;
        $slug = $slug . '-' . ($lastNumber + 1);
    }

    if ($modelClass->where('slug', $slug)->exists()) {
        $slug = slug($modelClass, 'slug', $slug);
    }

    return $slug;
}
