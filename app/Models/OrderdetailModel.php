<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderdetailModel extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'od_id';
    protected $fillable = ['order_id','item_id','quentity','price','subtotal'];
}
