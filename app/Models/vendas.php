<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vendas extends Model
{
    use HasFactory;
    
    protected $primarykey = 'id_venda';
    
     protected $fillable = [
        'id_cliente',
        'valor_total',
        'statusvenda',
     ];


}
