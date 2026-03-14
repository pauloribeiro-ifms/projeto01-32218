<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Merenda extends Model
{
    protected $fillable = ['nome_prato', 'descricao', 'data'];
}
