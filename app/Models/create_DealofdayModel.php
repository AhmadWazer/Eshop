<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class create_DealofdayModel extends Model
{
    use HasFactory;
    protected $table = 'dealofday';
    protected $primaryKey = 'D_id';
    protected $fillable = ['title','sub_title','description','image','price'];
}
