<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Shoe;

class ShoePhoto extends Model
{
    use HasFactory, softDeletes;
    protected $fillable = [
        'shoe_id',
        'image',
    ];
    public function shoe():belongsTo
    {
        return $this->belongsTo(Shoe::class);
    }
    public function setImageAttribute($value)
    {
        $this->attributes['image'] = $value;
    }
}
