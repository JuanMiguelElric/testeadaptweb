<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Triangulo extends Model
{
    use HasFactory;

    protected $table = 'triangulo';
    protected $fillable = [
        'valor1',
        'valor2',
        'valor3',
    ];
}
