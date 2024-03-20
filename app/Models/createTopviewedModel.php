<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class createTopviewedModel extends Model
{
    use HasFactory;
    protected $table ="topviewed";
    protected $primaryKey = "T_id";
    protected $fillable = ['title','sub_title','btn_text'];
}
