<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    protected $fillable = ['name', 'phone_number','address', 'product_id',
    'user_id', 'status', '	payment_method', 'payment_status',
   ];

   public function product(){
    return $this->belongsTo(product::class);
}
}
