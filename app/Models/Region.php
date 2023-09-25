<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regiones';
    protected $primaryKey = 'id_region';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_region',
        'nombre',
        'lider',
    ];

    protected $attributes = [
        'id_region' => 0,
        'nombre' => '',
        'lider' => '',
    ];
}
