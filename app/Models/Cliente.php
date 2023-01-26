<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = false;
    
    protected $table = 'clientes';
    protected $fillable = ['nome', 'telefone','cpf', 'placa'];

}
