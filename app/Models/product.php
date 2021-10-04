<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = ['category_id', 'sub_category_id','name', 'size_id',
     'color_id', 'description', 'price', 'sale_price', 'image',
    ];

    public function category(){
        return $this->belongsTo(category::class);
    }
    public function sub_category(){
        return $this->belongsTo(sub_category::class);
    }

}
