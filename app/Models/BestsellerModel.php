<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BestsellerModel extends Model
{
    use HasFactory;
    protected $table = 'bestseller';
    protected $primaryKey = 'B_id';
    protected $fillable = ['B_subtitle','B_image','price'];
}
