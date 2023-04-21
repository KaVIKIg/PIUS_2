<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

protected $table = 'categories';

protected $fillable = [
    'name',
    'slug',
    'active',
    'parent_category',
];



public function product(): HasMany
{
    return $this->hasMany(Product::class, 'category_id');
}

public function parent(): BelongsTo
{
    return $this->belongsTo(Category::class, 'parent_category')
        ->where('active', true);
}


public function child(): HasMany
{
    return $this->hasMany(Category::class, 'parent_category')
        ->where('active', true);
}

}
