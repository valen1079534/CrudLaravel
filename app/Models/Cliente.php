<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'id';
    protected $fillable = ['name', 'cedula', 'direccion', 'telefono'];
    protected $guarded= [];
    public $timestamps = false;
}
