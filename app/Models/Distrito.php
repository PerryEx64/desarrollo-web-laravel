<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;
    protected $table = 'distritos';
    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id',
        'nombre',
        'lider',
        'cantidad_iglesias'
    ];

    protected $attributes = [
        'id' => 0,
        'nombre' => '',
        'lider' => '',
        'cantidad_iglesias' => 0
    ];
}
