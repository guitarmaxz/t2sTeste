<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacao extends Model
{
    use HasFactory;
    protected $table = "movimentacaos";
    protected $fillable = [
        'tp_movimentacao',
        'dt_inicio',
        'dt_final'
    ];



    public function users()
    {
        return $this->hasMany(User::class, 'cliente_id', 'id');
    }
}
