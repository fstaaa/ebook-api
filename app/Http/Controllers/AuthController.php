<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119075,
        'name' => 'Fausta Estiawan',
        'gender' => 'Male',
        'phone' => '081224240007',
        'class' => 'XII RPL 3'];
  }
}
