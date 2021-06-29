<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendasitens extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_venda',
        'id_cliente',
        'id_produto',
        'qde',
        'valorunit',
        'status',
    ];
}
