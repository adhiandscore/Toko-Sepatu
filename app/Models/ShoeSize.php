<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Shoe;

class ShoeSize extends Model
{
    use hasFactory, softDeletes;
    protected $fillable = [
        'shoe_id',
        'size',
    ];

    public function shoe(): belongsTo
    {
        return $this->belongsTo(Shoe::class);
    }
    public function setSizeAttribute($value)
    {
        $this->attributes['size'] = $value;
    }
}
