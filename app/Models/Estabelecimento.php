<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    protected $fillable = ['nome', 'categoria', 'endereco'];
}