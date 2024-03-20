<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CustomerModel;

class CheckoutModel extends Model
{
    use HasFactory;
    
    protected $table = 'order';
    protected $primaryKey = 'order_id';
    protected $fillable = ['customer_id','subtotal','discount','grandtotal','address','company','state','country','zip'];

     // Define the relationship to Customer
     public function customer()
     {
         return $this->belongsTo(Customer::class, 'customer_id'); // Adjust the foreign key column name if needed
     }
}