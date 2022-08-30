<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
  public function store(Request $request) {
    $data = $request->all();

    return $data;
  }
}
