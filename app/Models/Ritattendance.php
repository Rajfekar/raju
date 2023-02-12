<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ritattendance extends Model
{
    use HasFactory;
    protected $table = "ritattendances";
    private $primarykey = "id";

}
