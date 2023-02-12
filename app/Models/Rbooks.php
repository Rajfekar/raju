<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rbooks extends Model
{
    use HasFactory;
    protected $table = "rbooks";
    private $primarykey = "id";
}
