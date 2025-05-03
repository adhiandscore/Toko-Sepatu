<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class ProductTransaction extends Model
{
    use hasFactory, softDeletes;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'booking_trx_id',
        'proof',
        'post_code',
        'city',
        'address',
        'is_paid',
        'promo_code_id',
        'shoe_id',
        'shoe_size',
        'quantity',
        'grand_total_amount',
        'sub_total_amount',
        'discount_amount',
    ];

    public static function generateUniqueBookingTrxId()
    {
        $prefix = 'SS';
        do {
            $randomString = $prefix.mt_rand(10000, 99999);

        } while (self::where('booking_trx_id', $randomString) ->exists());

        return $randomString;
    }
    public function promoCode()
    {
        return $this->belongsTo(PromoCode::class, 'promo_code_id');
    }
    public function shoe()
    {
        return $this->belongsTo(Shoe::class, 'shoe_id');
    }
}
