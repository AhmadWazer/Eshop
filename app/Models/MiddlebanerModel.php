<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MiddlebanerModel extends Model
{
    use HasFactory;
    protected $table ="middlebaner";
    protected $primaryKey = "M_id";
    protected $fillable = ['M_image','M_subtitle','M_btn','M_title'];
    
}
