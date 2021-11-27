<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119075,
        'name' => 'Fausta Estiawan',
        'gender' => 'Male',
        'phone' => '082224142390',
        'class' => 'XII RPL 3'];
  }
}
