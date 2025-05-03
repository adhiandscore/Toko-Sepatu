<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PromoCode extends Model
{
    use hasFactory, softDeletes;
    protected $fillable = [
        'code',
        'discount_amount'
    ];

    public function setCodeAttribute($value)
    {
        $this->attributes['code'] = $value;
    }
    public function setDiscountAmountAttribute($value)
    {
        $this->attributes['discount_amount'] = $value;
    }
}
