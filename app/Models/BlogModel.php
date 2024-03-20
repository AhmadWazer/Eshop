<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogModel extends Model
{
    use HasFactory;
    protected $table = 'blog';
    protected $primaryKey = 'B_id';
    protected $fillable = ['B_subtitle','B_image','B_titlt','B_Ttitle'];

}
