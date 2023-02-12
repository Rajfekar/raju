<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ibooks extends Model
{
    use HasFactory;
    protected $table = "ibooks";
    private $primarykey = "id";
}
