<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CProduct extends Model
{
    use HasFactory;
    protected $table = 'c_products';
    protected $primarykey = 'c_id';
    protected $fillable = [
        'c_name',
        'c_price',
        'c_image',
        'c_description',
    ];
}
