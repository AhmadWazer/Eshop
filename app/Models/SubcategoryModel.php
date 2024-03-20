<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubcategoryModel extends Model
{
    use HasFactory;
    protected $table ="subcategory";
    protected $primaryKey = "subc_id";
    protected $fillable = ['subc_name','subc_image','ctgry_id'];
}
