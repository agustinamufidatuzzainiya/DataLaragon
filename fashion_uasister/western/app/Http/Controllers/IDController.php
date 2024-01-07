<?php

namespace App\Http\Controllers;

use App\Models\Western;
use Illuminate\Http\Request;

class IDController extends Controller
{
     public function getId(Request $request){
          $id = $request->id;
          return Western::find($id);
     }
}