<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carros extends Model
{
  protected $fillable = [
      'marca', 'modelo', 'placa',
  ];
}
