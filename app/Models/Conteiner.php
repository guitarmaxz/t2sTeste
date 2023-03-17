<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conteiner extends Model
{
    use HasFactory;
    protected $table = "conteiners";
    protected $fillable = [
        'nr_conteiner',
        'tp_conteiner',
        'status',
        'categoria',
    ];




    public function users()
    {
        return $this->hasMany(User::class, 'cliente_id', 'id');
    }
}
