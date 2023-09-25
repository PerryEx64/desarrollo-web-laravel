<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    protected $table = 'distritos';
    protected $primaryKey = 'id_distrito';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_distrito',
        'nombre',
        'lider',
        'cantidad_iglesias'
    ];

    protected $attributes = [
        'id_distrito' => 0,
        'nombre' => '',
        'lider' => '',
        'cantidad_iglesias' => 0
    ];
}
