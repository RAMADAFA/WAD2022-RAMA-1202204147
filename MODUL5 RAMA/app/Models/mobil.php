<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    protected $table = "showroom_rama";
    use HasFactory;
    public $timestamps = false;

    protected $guarded = ['id'];

}
