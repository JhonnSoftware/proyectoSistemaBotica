<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'id_cliente');
    }

    protected $fillable = [
        'id_cliente',
        'total',
        'fecha',
        'estado'
    ];
}
