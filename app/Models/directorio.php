<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class directorio extends Model
{
   
    use HasFactory;

    protected $primaryKey = 'codigoEntrada';
    public $timestamps = false;
    protected $table = 'directorios_';
}
