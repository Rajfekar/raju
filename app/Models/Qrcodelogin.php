<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcodelogin extends Model
{
    use HasFactory;
    protected $table = "qrcodelogins";
    private $primarykey = "id";
}
