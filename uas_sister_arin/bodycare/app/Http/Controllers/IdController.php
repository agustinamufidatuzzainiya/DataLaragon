<?php

namespace App\Http\Controllers;

use App\Models\Bodycare;
use Illuminate\Http\Request;

class IdController extends Controller
{
     public function getId(Request $request){
          $id = $request->id;
          return Bodycare::find($id);
     }
}