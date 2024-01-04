<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $table = 'dosen';
    protected $fillable = ['name', 'departemen', 'email', 'link-sinta', 'link-schoolar', 'photolink'];
}
