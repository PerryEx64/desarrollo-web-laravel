<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Territorio extends Model
{
    use HasFactory;
    protected $table = 'territorios';
    protected $primaryKey = 'id_territorio';

    public $incrementing = true;

    public $timestamps = true;

    protected $fillable = [
        'id_territorio',
        'nombre',
        'lider',
    ];

    protected $attributes = [
        'id_territorio' => 0,
        'nombre' => '',
        'lider' => '',
    ];



}
