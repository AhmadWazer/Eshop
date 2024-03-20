<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage_headerModel extends Model
{
    use HasFactory;
    protected $table ="homepage_header";
    protected $primaryKey = "id";
    protected $fillable = ['header_image','header_tittle','header_Subtittle','header_description','header_btn_text','header_btn_link'];
}
