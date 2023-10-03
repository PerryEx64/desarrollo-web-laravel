<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;
    protected $table = 'regiones';
    protected $primaryKey = 'id';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id',
        'nombre',
        'lider',
    ];

    protected $attributes = [
        'id' => 0,
        'nombre' => '',
        'lider' => '',
    ];
}
