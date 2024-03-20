<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrendingItemsModel extends Model
{
    use HasFactory;  
    protected $table ="trending_items";
    protected $primaryKey = "T_id";
    protected $fillable = ['image','sub_title','price'];
}
