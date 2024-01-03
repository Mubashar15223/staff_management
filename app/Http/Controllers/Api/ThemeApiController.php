<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Theme;
class ThemeApiController extends Controller
{
    //
    public function index()
    {
          $theme = Theme::all();
          return response()->json([
            'status'=>200,
            'theme'=>$theme,
          ]);

    }
}
