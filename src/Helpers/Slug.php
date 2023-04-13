<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

function slug($modelClass, $attribute, $name): string
{
    $tableName = (new $modelClass)->getTable();
    $copyModelClass = $modelClass;

    $slug = Str::slug($name);

    $traits = class_uses($modelClass);

    $modelClass = in_array('Illuminate\Database\Eloquent\SoftDeletes', $traits) ? $modelClass::query()->withTrashed() : $modelClass::query();

    $max = $modelClass->where($attribute, $name)->latest('id')->first(['slug']);

    if (isset($max)) {
        $lastSlug = $max->slug;
        preg_match('/-([0-9]+)$/', $lastSlug, $matches);
        $lastNumber = isset($matches[1]) ? intval($matches[1]) : 0;
        $slug = $slug . '-' . ($lastNumber + 1);
    }

    if (DB::table($tableName)->where('slug', $slug)->exists()) {
        $slug = slug($copyModelClass, 'slug', $slug);
    }
    return $slug;
}
