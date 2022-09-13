<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Marcorombach\LaravelAafRadius\LaravelAafRadius;

class RadiusController extends Controller
{
    function login(Request $request){
        $radius = new LaravelAafRadius();
        return $radius->authenticate($request->username, $request->password);
    }
}
