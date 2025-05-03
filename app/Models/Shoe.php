<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\Brand;

class Shoe extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'about',
        'price',
        'image',
        'category_id',
        'brand_id',
    ];

    public function cateogry():belongsTo{
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand():belongsTo{
        return $this->belongsTo(Brand::class, 'brand_id');
    }
    public function setNameAttribute($value) 
    {
        $this->attributes['name'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
