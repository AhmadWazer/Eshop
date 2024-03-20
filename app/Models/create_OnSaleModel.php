<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_OnSaleModel extends Model
{
    use HasFactory;
    protected $table = 'on_sale';
    protected $primaryKey = 'S_id';
    protected $fillable = ['sub_title','image','price'];

}
