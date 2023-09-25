<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegionesDistrito extends Model
{
    use HasFactory;
    protected $table = 'regiones_distritos';
    protected $primaryKey = 'id_regiones_distritos';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_region',
        'id_distrito',
    ];

    protected $attributes = [
        'id_region' => 0,
        'id_distrito' => 0
    ];
}
